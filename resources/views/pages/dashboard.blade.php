@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')


<h1 style="text-align: center;">Discussion</h1>
<h5 style="color:grey;">This is where you can post, read, and reply to questions</h5>
<div class="container">
    <div class="row"></div>
        <div class="col-md-12 text-center" >
            <a href= "/subjects/discussion"><button type="button" class="btn btn-primary btn-lg btn-block"> Discussions </button></a>
            <a href= "/subjects/note"><button type="button" class="btn btn-primary btn-lg btn-block"> Notes </button></a>
            <a href= "/subjects/resource"><button type="button" class="btn btn-primary btn-lg btn-block"> Resource List </button></a>
          </div>
        </div>
        <br>
        <div class="col-md-12 text-center" >
            <a href= "/subjects/discussion"><button type="button" class="btn btn-primary btn-lg btn-block"> Discussions </button></a>
            <a href= "/subjects/note"><button type="button" class="btn btn-primary btn-lg btn-block"> Notes </button></a>
            <a href= "/subjects/resource"><button type="button" class="btn btn-primary btn-lg btn-block"> Resource List </button></a>
          </div>
        </div>
    </div>
</div>


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