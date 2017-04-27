@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div id="app">
        <h1>Chatroom</h1>
        <chat-log v-bind:messages="messages"></chat-log>
        <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>
  </div>
</div>
@endsection
