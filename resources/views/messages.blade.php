@extends('layouts.app')

@section('content')
  <h1>Messages</h1>
  @if (count($messages)>0)
    @foreach ($messages as $key => $message)
        <ul class="list-group">
          <li class="list-group-item">Name : {{$message->name}}</li>
          <li class="list-group-item">From : {{$message->email}}</li>
          <li class="list-group-item">and they said : {{$message->message}}</li>
        </ul>
    @endforeach
  @endif
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection
