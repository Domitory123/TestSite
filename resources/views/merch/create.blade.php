@extends('layouts.app')

@section('addMerch')
<div class="sendingNews">
  <h3>добавлення товару</h3>
  <hr/>
    <form action="{{ route('merch.store') }}"   method="post" enctype="multipart/form-data">
        {{ csrf_field() }}	
          <label for="title">Назва</label><br/>
          <input class="inputText" id="title" name="title" type="text" value="{{old('title')}}"></input>
          <br/>
           @error('title')
           <b class="text-danger" >{{$message}}</b>
           <br/>
           @enderror
         
       

          <label for="describe">Опис</label> <br/>
          <textarea name="describe" cols="28"  rows="5" >{{old('describe')}}</textarea> <br/>
          @error('describe')
           <b class="text-danger">{{$message}}</b>
           @enderror

          <label for="nameMainPhoto">Вибір головної фотографії</label> <br/>
          <input  class="inputfile" id="nameMainPhoto" name="nameMainPhoto"  type="file"></input>
          <br/>
          @if ($errors->has('nameMainPhoto'))
            <span class="text-danger">{{ $errors->first('nameMainPhoto') }}</span>
          @endif

          <label for="namePhoto1">Вибір  фото 1</label> <br/>
          <input class="inputfile" id="namePhoto1" name="namePhoto1" type="file"></input>
            @error('namePhoto1')
            <br/>
           <span class="text-danger">{{$message}}</span>
           @enderror
           <br/>
           
          <label for="namePhoto2">Вибір  фото 2</label> <br/>
          <input class="inputfile" id="namePhoto2" name="namePhoto2" type="file"></input>
          <br/>
          @error('namePhoto2')
           <span class="text-danger" >{{$message}}</span>
           @enderror
           <br/>
          <input  class="inputSubmit" type="submit" ></input>
    </form>
    <br/> 
</div> 

@endsection