@extends('layouts.admin')

@section('content')

    <h1>Create Users</h1>

    <hr>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}

    <br>

        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Email Address']) !!}

    <br>

    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id', [''=>'Choose Options'] + $roles,null,['class'=>'form-control']) !!}

    <br>

    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}

    <br>

    {!! Form::label('photo_id', 'Photo:') !!}
    {!! Form::file('photo_id', null,['class'=>'form-control']) !!}

    <br>

    {!! Form::label('is_active', 'Status:') !!}
    {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}

    <br>

        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

    <br>

    @include('includes.form_error')

@endsection