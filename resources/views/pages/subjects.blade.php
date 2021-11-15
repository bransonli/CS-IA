@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')

<a href="/">Go home</a>

<li>
  @foreach ($subjects as $subject)
      <ol><a href="/topics/{{$subject->name}}">{{ $subject->name }}</a></ol>
  @endforeach
</li>






@stop