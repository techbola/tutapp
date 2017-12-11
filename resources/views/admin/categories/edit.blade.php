@extends('layouts.admin')

@section('content')

    <h1>Edit Category</h1>

    <hr>

    <div class="col-sm-6">

        {!! Form::model($category, ['method'=>'PATCH', 'action'=> ['AdminCategoriesController@update', $category->id]]) !!}

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Category']) !!}

        <br>
        {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-6']) !!}

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminCategoriesController@destroy', $category->id]]) !!}

        {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-6']) !!}

        {!! Form::close() !!}

        @include('includes.form_error')

    </div>

    <div class="col-sm-6">


    </div>

@endsection