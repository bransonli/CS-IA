@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')


<h1 style="text-align: center;">Discussion</h1>
<div class="feature_description" style="color:grey;">This is where you can post, read, and reply to questions</div class="feature_description">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <a href= "/subjects/discussion"><button type="button" class="btn btn-light btn-lg btn-block"> Discussions </button></a>
            <a href= "/subjects/note"><button type="button" class="btn btn-light btn-lg btn-block"> Notes </button></a>
            <a href= "/subjects/resource"><button type="button" class="btn btn-light btn-lg btn-block"> Resource List </button></a>
        </div>
    </div>
</div>

<h1 style="text-align: center;">Notes</h1>
<div class="feature_description" style="color:grey;">You can find notes of past cohorts here</div class="feature_description">
<div class="feature_description" style="color:grey;">You can also donate notes here</div class="feature_description">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <a href= "/subjects/discussion"><button type="button" class="btn btn-light btn-lg btn-block"> Discussions </button></a>
            <a href= "/subjects/note"><button type="button" class="btn btn-light btn-lg btn-block"> Notes </button></a>
            <a href= "/subjects/resource"><button type="button" class="btn btn-light btn-lg btn-block"> Resource List </button></a>
        </div>
    </div>
</div>


<h1 style="text-align: center;">Resources</h1>
<div class="feature_description">You can find useful oneline resources used by past cohorts here</div class="feature_description">
<div class="feature_description" style="color:grey;">You can share useful source you've find online here</div class="feature_description">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <a href= "/subjects/discussion"><button type="button" class="btn btn-light btn-lg btn-block"> Discussions </button></a>
            <a href= "/subjects/note"><button type="button" class="btn btn-light btn-lg btn-block"> Notes </button></a>
            <a href= "/subjects/resource"><button type="button" class="btn btn-light btn-lg btn-block"> Resource List </button></a>
        </div>
    </div>
</div>



@stop