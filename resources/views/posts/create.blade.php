@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
   
<!--    <form action="PostsController@store" method="POST">
        <h3>Title</h3>
        <input type="text" name="text" palceholder="Title"><br><br>
        <h3>Body</h3>
        <textarea rows="10" cols="120" name='body' palceholder="Body"></textarea><br><br>
        <input class="btn btn-primary" value="Submit">
    </form>

-->

{!! Form::open(['action'=>'PostsController@store' , 'method'=>'POST']) !!}
    <div class="form">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '',['class'=>'form-control' , 'placeholder'=>'Title'])}}       
    </div>
    <br><br>
    <div class="form">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '',['class'=>'form-control' , 'placeholder'=>'Body'])}}
    </div>
    <br><br>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}

@endsection