@extends('layouts.app')

@section('content')
    <a href="/lsapp/public/posts" class="btn btn-info" >Back</a>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small><br><br>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy' , $post->id], 'method' => 'POST' ,'class'=> 'pull-right'])!!}
                {!!Form::hidden('_method','DELETE') !!}
                {!!Form::submit('Delete' , ['class' => "btn btn-danger"]) !!}
            {!!Form::close()!!}
        @endif
    @endif
@endsection