@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop
@section('content')

<h1>Discussions</h1>

<a href="/subjects/{{$subject->name}}/discussion/create">Create new discussion</a>
<br>
<a href="/subjects">Check out other subjects</a>
<br>

@foreach ($discussions as $discussion)
    <ol><a href="/subjects/{{$subject->name}}/discussion/{{$discussion->id}}">{{$discussion->name}}</a>
    <a href='/subjects/{{$subject->name}}/discussion/{{$discussion->id}}/delete'><button>delete</button></a>
    <a href='/subjects/{{$subject->name}}/discussion/{{$discussion->id}}/edit'><button>edit</button></a></ol>
  
  </ol>
@endforeach


@stop