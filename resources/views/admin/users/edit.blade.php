@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>

    <hr>

    <div class="col-sm-3">

        <img src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">

        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'files'=>true]) !!}

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}

        <br>

        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Email Address']) !!}

        <br>

        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', $roles,null,['class'=>'form-control']) !!}

        <br>

        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}

        <br>

        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null,['class'=>'form-control']) !!}

        <br>

        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}

        <br>

        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}

        <br>

        @include('includes.form_error')

    </div>

@endsection