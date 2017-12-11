@extends('layouts.admin')

@section('content')

    <h1>Create Category</h1>

    <hr>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Category']) !!}

    <br>
    {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

    <br>

    @include('includes.form_error')

@endsection