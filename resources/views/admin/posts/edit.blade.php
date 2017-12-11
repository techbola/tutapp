@extends('layouts.admin')

@section('content')

    <h1>Edit Post</h1>

    <hr>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id], 'files'=>true]) !!}

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}

    <br>

    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', $categories, null,['class'=>'form-control']) !!}

    <br>

    {!! Form::label('photo_id', 'Photo:') !!}
    {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}

    <br>

    {!! Form::label('body', 'Description:') !!}
    {!! Form::textarea('body', null,['class'=>'form-control', 'placeholder'=>'Enter Description']) !!}

    <br>

    {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-6']) !!}

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}

    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}

    {!! Form::close() !!}

    <br><br><br><br>

    @include('includes.form_error')

@endsection