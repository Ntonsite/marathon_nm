@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Loans Management</h2>

        </div>
    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>

@endif


<table class="table table-bordered">

  <tr>

     <th>No</th>

     <th>Name</th>
     <th>location</th>
     <th>Phone</th>
     <th>Amount</th>
     <th>Reason</th>
     <th>Maturity</th>
     <th>Status</th>

     <th width="280px">Action</th>

  </tr>

    @foreach ($loans as $key => $loan)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $loan->name }}</td>
        <td>{{ $loan->location}}</td>
        <td>{{ $loan->phone }}</td>
        <td>{{ $loan->amount }}</td>
        <td>{{ $loan->reason }}</td>
        <td>{{ $loan->maturity }}</td>
        <td>{{ $loan->status }}</td>

        <td>


            @can('loan-edit')

                <a class="btn btn-primary" href="{{ route('loans.edit',$loan->id) }}">Update</a>

            @endcan

        </td>

    </tr>

    @endforeach

</table>


{!! $loans->render() !!}


<p class="text-center text-primary"><small>BosscodeSolutions</small></p>

@endsection