@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop
@section('content')

<h1>Resources</h1>

<a href="/subjects/{{$subject->name}}/resource/">Add a resource (make this a modal)</a> 
<br>
<a href="/subjects/resource">Check out resources for other subjects</a>
<br>

@foreach ($resources as $resource)
    <ol> {{$resource->name}} -- {{$resource->description}} -- <a href="{{$resource->link}}">{{$resource->link}}</a>
    <a href='/subjects/{{$subject->name}}/resource/{{$resource->id}}/edit'><button>edit</button></a>
    <a href='/subjects/{{$subject->name}}/resource/{{$resource->id}}/delete'><button>delete</button></a></ol>
  
  </ol>
@endforeach


@stop