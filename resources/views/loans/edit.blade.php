@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Loan</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('loans.index') }}"> Back</a>

        </div>

    </div>

</div>


@if (count($errors) > 0)

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

        </ul>

    </div>

@endif


{!! Form::model($loan, ['method' => 'PATCH','route' => ['loans.update', $loan->id]]) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Loan Status:</strong>
            <select class="form-control" name="status" id="">
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
            </select>        
        </div>

    </div>

    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

{!! Form::close() !!}


@endsection
