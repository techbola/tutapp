@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_category'))

        <div class="alert alert-success">

            <p>{{ session('deleted_category') }}</p>

        </div>

    @endif

    <h1>Create Category</h1>

    <hr>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Category']) !!}

        <br>
        {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}

        <br>

        @include('includes.form_error')

    </div>

    <div class="col-sm-6">

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>

            @if($categories)

                @foreach($categories as $category)

                    <tr>
                        <td>{{ $category->id }}</td>
                        <td><a href="{{ route('admin.categories.edit', $category->id) }}">{{ $category->name ? $category->name : 'Uncategorized' }}</a>
                        <td>{{ $category->updated_at ? $category->updated_at->diffForHumans() : 'no date' }}</td>
                    </tr>

                @endforeach

            @endif

            </tbody>
        </table>

    </div>

@endsection