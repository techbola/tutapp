@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>

    <hr>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}

    <br>

    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', [1=>'PHP', 0=>'Javascript'], null,['class'=>'form-control']) !!}

    <br>

    {!! Form::label('photo_id', 'Photo:') !!}
    {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}

    <br>

    {!! Form::label('body', 'Description:') !!}
    {!! Form::textarea('body', null,['class'=>'form-control', 'placeholder'=>'Enter Description']) !!}

    <br>

    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

    <br>

    @include('includes.form_error')

@endsection