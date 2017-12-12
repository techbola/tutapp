@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_media'))

        <div class="alert alert-success">

            <p>{{ session('deleted_media') }}</p>

        </div>

    @endif

    <h1>Medias</h1>

    <hr>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @if($photos)

            @foreach($photos as $photo)

                <tr>
                    <td>{{ $photo->id }}</td>
                    <td><img src="{{ $photo->file ? $photo->file : 'http://placehold.it/400x400' }}" height="50" alt=""></td>
                    <td>{{ $photo->created_at ? $photo->created_at->diffForHumans() : 'no date' }}</td>
                    <td>

                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMediasController@destroy', $photo->id]]) !!}

                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

                        {!! Form::close() !!}

                    </td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@endsection