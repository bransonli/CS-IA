@extends('layouts/layout')
@section('title')
  <head>
    <title> {{$topic->name}} </title>
  </head>
@stop

@section('content')

<h1>{{$topic->name}}</h1>

@foreach ($replies as $reply)
    <p>{{$reply->content}}</p>
@endforeach


@stop