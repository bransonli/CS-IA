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
                <select type="text" name="subject_id" id = "subject_id">
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                </select>
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

