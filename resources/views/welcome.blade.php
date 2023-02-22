@extends('layouts.app')

@section('contentWelcom')

  <h1>welcome</h1>
 
  
  @if (Auth::user()!=null)
  <h1>welcome2</h1>

    @if (Auth::user()->admin)

    <h3>редагування товару1  {{ __('Name') }}  </h3>
    <h3>редагування товару1  {{ Auth::user()->name }}  </h3>
      <form action="/" method="post">
      {{ csrf_field() }}	
        <label for="name">Name</label>
        <input id="name" name="name" type="text"></input>
        <input type="submit"></input>
      </form>

      @endif

      @endif



    

@endsection