@extends('layouts/layout')
@section('title')
  <head>
    <title> {{$topic->name}} </title>
  </head>
@stop

@section('content')

<a href='/topics/{{$subject->name}}'>Other questions and topics related to {{$subject->name}}</a>

<h1>{{$topic->name}}</h1>

@foreach ($replies as $reply)
    <p>{{$reply->content}}</p>
@endforeach

<form method ='POST' action ="/reply/{{$topic->id}}" >
    @csrf
    <div> 
        <div class="control">
            <input type="text" name="content" id = "content">
            <br>
        </div>
    </div>
    <br>

    <div>
        <div class="control">
            <button class="button is-link" type="submit">send</button>
            <br>
            <br>

        </div>
    </div>
</form>


@stop