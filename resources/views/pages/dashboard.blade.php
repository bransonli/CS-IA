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
            @foreach ($subjects as $subject)
                <a href="/subjects/{{$subject->name}}/discussion"><button type="button" class="btn btn-light btn-lg btn-block">{{ $subject->name }}</button></a>
            @endforeach
        </div>
    </div>
</div>

<h1 style="text-align: center;">Notes</h1>
<div class="feature_description" style="color:grey;">You can find notes of past cohorts here</div class="feature_description">
<div class="feature_description" style="color:grey;">You can also donate notes here</div class="feature_description">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            @foreach ($subjects as $subject)
                <a href="/subjects/{{$subject->name}}/note"><button type="button" class="btn btn-light btn-lg btn-block">{{ $subject->name }}</button></a>
            @endforeach
        </div>
    </div>
</div>


<h1 style="text-align: center;">Resources</h1>
<div class="feature_description">You can find useful oneline resources used by past cohorts here</div class="feature_description">
<div class="feature_description" style="color:grey;">You can share useful source you've find online here</div class="feature_description">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            @foreach ($subjects as $subject)
                <a href="/subjects/{{$subject->name}}/resource"><button type="button" class="btn btn-light btn-lg btn-block">{{ $subject->name }}</button></a>
            @endforeach
        </div>
    </div>
</div>



@stop