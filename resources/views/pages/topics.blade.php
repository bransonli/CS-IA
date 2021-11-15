@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop
@section('content')

<a href="/topic/create/{{$subject}}">Create new topic</a>
<br>
<a href="/subjects">Check out other subjects</a>
<br>

@foreach ($topics as $topic)
    <ol><a href="/replies/{{$topic->name}}">{{$topic->name}}</a>
    <a href="/topic/{{$topic->id}}/delete"><button>delete</button></a>
    <a href="/topic/{{$topic->id}}/edit"><button>edit</button></a></ol>
  
  </ol>
@endforeach


@stop