@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')


    <div style="margin: 5%;" class="container">
        <div class="row"></div>
            <div class="col-sm">
                <a href= "/subjects/discussion"><button type="button" class="btn btn-primary btn-lg btn-block"> Discussions </button></a>
                <a href= "/subjects/note"><button type="button" class="btn btn-primary btn-lg btn-block"> Notes </button></a>
                <a href= "/subjects/resource"><button type="button" class="btn btn-primary btn-lg btn-block"> Resource List </button></a>
            </div>
        </div>
    </div>


@stop