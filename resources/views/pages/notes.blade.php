@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop
@section('content')

<h1>Notes</h1>

<a href="/subjects/{{$subject->name}}/note/create">Donate Notes</a>
<br>
<a href="/subjects/note">Check out notes for other subjects</a>
<br>

@foreach ($notes as $note)
    <ol><a href="/subjects/{{$subject->name}}/note/{{$note->id}}">{{$note->description}}</a>
    <a href='/subjects/{{$subject->name}}/note/{{$note->id}}/delete'><button>download</button></a>
    <a href='/subjects/{{$subject->name}}/note/{{$note->id}}/edit'><button>view</button></a></ol>
  
  </ol>
@endforeach


@stop