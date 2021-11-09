@extends('layouts/layout')
@section('title')
  <head>
    <title> Title </title>
  </head>
@stop

@section('content')

<div class = "w3-text-teal w3-center">
    <form method ='POST' action ="/topic" >
        @csrf
        <div> 
            <label class ="label" for="name">Topic</label>
            <div class="control">
                <input type="text" name="name" id = "name">
                <br>
            </div>
        </div>
        <br>

        <div>
            <label class ="label" for="subject">Subject</label>
            <div class="control">
                <input type="text" name="subject" id = "subject">
            </div>
            <br>
        </div>
            
    
        <div>
            <div class="control">
                <button class="button is-link" type="submit">submit</button>
                <br>
                <br>

            </div>
        </div>

        
    
    </form>
</div>


@stop

