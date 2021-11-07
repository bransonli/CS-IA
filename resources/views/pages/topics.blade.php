@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')

@foreach ($topics as $topic)
    <a href="/replies/{{$topic->name}}">{{$topic->name}}</a>
@endforeach


@stop