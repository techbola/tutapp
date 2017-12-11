@extends('layouts.admin')

@section('content')

    <h1>Edit Category</h1>

    <hr>

    <div class="col-sm-6">

        {!! Form::model($category, ['method'=>'PATCH', 'action'=> ['AdminCategoriesController@update', $category->id]]) !!}

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Category']) !!}

        <br>
        {!! Form::submit('Update Category', ['class'=>'btn btn-primary']) !!}

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
                        <td>{{ $category->name ? $category->name : 'Uncategorized' }}</td>
                        <td>{{ $category->created_at ? $category->created_at->diffForHumans() : 'no date' }}</td>
                        <td>{{ $category->updated_at ? $category->updated_at->diffForHumans() : 'no date' }}</td>
                    </tr>

                @endforeach

            @endif

            </tbody>
        </table>

    </div>

@endsection