@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css" class="css">

@stop

@section('content')

    <h1>Upload Media</h1>

    <hr>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminMediasController@store', 'class'=>'dropzone', 'files'=>true]) !!}

    {!! Form::close() !!}

    <br>

    @include('includes.form_error')

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>

@stop