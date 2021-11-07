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
                <h1>Questions asked and to be asked</h1>
                <button type="button" class="btn btn-primary btn-lg btn-block">Subject specific</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Extended Essays</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Career Advices</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Others</button>
            </div>
            <div class="col-sm">
                <h1>Look at IB resources used by past cohorts</h1>
                <button type="button" class="btn btn-primary btn-lg btn-block">Subject specific</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Extended Essays</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">CAS</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">TOK</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">College Applications</button>
 
            </div>
        </div>
    </div>


@stop