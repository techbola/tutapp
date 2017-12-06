@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_post'))

        <div class="alert alert-success">

            <p>{{ session('deleted_post') }}</p>

        </div>

    @endif

    <h1>Posts</h1>

    <hr>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)

                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img height="50" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}" alt=""></td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@endsection