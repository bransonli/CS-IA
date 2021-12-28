@extends('layouts/layout')
@section('title')
  <head>
    <title> {{$discussion->name}} </title>
  </head>
@stop

@section('content')

<a href='/subjects/{{$subject->name}}'>Other questions and discussions related to {{$subject->name}}</a>

<h1>{{$discussion->name}}</h1>

@foreach ($replies as $reply)
    <p>
        {{$reply->content}}
        <a href="/subjects/{{$subject->name}}/discussion/{{$reply->discussion_id}}/reply/{{$reply->id}}/delete"><button>Delete message</button></a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Edit message
        </button>
    </p>
@endforeach


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<form method ='POST' action ="/subjects/{{$subject->name}}/discussion/{{$discussion->id}}/reply" >
    @csrf
    <div> 
        <div class="control">
            <input type="text" name="content" id = "content">
            <br>
        </div>
    </div>
    <br>

    <div>
        <div class="control">
            <button class="button is-link" type="submit">send</button>
            <br>
            <br>

        </div>
    </div>
</form>


@stop