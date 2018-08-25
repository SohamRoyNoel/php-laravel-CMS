@extends('layouts.admin')

@section('content')

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role', 'Role:') !!}
        {!! Form::select('role', array(''=>'Select Role') + $roles,  null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('acive', 'Active:') !!}
        {!! Form::select('acive',array(1 => 'Online', 0 => 'Offline'), 0, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}




    @include('pertial.validationErr')

@stop

@section('footer')

@stop