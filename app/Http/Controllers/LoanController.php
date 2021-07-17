<?php

    

namespace App\Http\Controllers;

    

use App\Models\Loan;

use Illuminate\Http\Request;
use App\Http\Controllers\SmsController;

    

class LoanController extends Controller

{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {
        $this->beem = new SmsController;
        $this->middleware('permission:loan-list|loan-create|loan-edit|loan-delete', ['only' => ['index','show']]);

        $this->middleware('permission:loan-create', ['only' => ['create','store']]);

        $this->middleware('permission:loan-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:loan-delete', ['only' => ['destroy']]);

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $loans = Loan::latest()->paginate(5);

        return view('loans.index',compact('loans'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('loans.create');

    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        request()->validate([

            'name' => 'required',

            'location' => 'required',
            'phone' => 'required',
            'amount' => 'required',
            'maturity' => 'required',
            'status' => 'required',
            'reason' => 'required',

        ]);

    

        Loan::create($request->all());

    

        return redirect()->route('loans.index')

                        ->with('success','Loan Request created successfully.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Loan  $loan

     * @return \Illuminate\Http\Response

     */

    public function show(Loan $loan)

    {

        return view('loans.show',compact('loan'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\ Loan  $loan

     * @return \Illuminate\Http\Response

     */

    public function edit(Loan $loan)

    {

        return view('loans.edit',compact('loan'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Loan $loan

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Loan $loan)

    {

         request()->validate([

            'status' => 'required',

        ]);

    
        $loan->update($request->all());

        $to = $loan->phone;

        $this->beem->send_approval($to);

        return redirect()->route('loans.index')->with('success','Loan updated successfully');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Loan  $loan

     * @return \Illuminate\Http\Response

     */

    public function destroy(Loan $loan)

    {

        $loan->delete();

    

        return redirect()->route('loans.index')

                        ->with('success','Loan deleted successfully');

    }

}