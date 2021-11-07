@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')

@foreach ($replies as $reply)
    <p>{{$reply->content}}</p>
@endforeach


@stop