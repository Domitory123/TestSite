@extends('layouts.app')

@section('contentWelcom')

  <h1>welcome</h1>
    <form action="/" method="post">
    {{ csrf_field() }}	
      <label for="name">Name</label>
      <input id="name" name="name" type="text"></input>
      <input type="submit"></input>
    </form>

@endsection