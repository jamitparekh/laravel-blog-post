@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>
    {!! Form::open(['action'=>['PostsController@update',$post->id], 'method'=>'POST']) !!}
    <div class="form">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title ,['class'=>'form-control' , 'placeholder'=>'Title'])}}       
    </div>
    <br><br>
    <div class="form">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body ,['class'=>'form-control' , 'placeholder'=>'Body'])}}
    </div>
    <br><br>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection