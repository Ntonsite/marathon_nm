@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Loans Management</h2>

        </div>

        <div class="pull-right">

        @can('loan-create')

            <a class="btn btn-success" href="{{ route('loans.create') }}">New Loan Request</a>

            @endcan

        </div>
    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

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

            <a class="btn btn-info" href="{{ route('loans.show',$loan->id) }}">Show</a>

            @can('loan-edit')

                <a class="btn btn-primary" href="{{ route('loans.edit',$loan->id) }}">Edit</a>

            @endcan

            @can('loan-delete')

                {!! Form::open(['method' => 'DELETE','route' => ['loans.destroy', $loan->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}

            @endcan

        </td>

    </tr>

    @endforeach

</table>


{!! $loans->render() !!}


<p class="text-center text-primary"><small>BosscodeSolutions</small></p>

@endsection