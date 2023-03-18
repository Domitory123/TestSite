@extends('layouts.app')

@section('updateMerch')
<div class="sendingNews">
  <h3>редагування товару  </h3>
  
  <hr/>
  <form action="{{route('merch.update',$merch->id)}}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}	
          <label for="title">Назва</label><br/>
          <input class="inputText" id="title" name="title" type="text" value="{{$merch->title}}"></input>
          <br/>
           @error('title')
           <b class="text-danger" >{{$message}}</b>
           <br/>
           @enderror
         

          <label for="describe">Опис</label> <br/>
          <textarea name="describe" cols="28"  rows="5" >{{$merch->describe}}</textarea> <br/>
          @error('describe')
           <b class="text-danger">{{$message}}</b>
           @enderror
         
         
          <label for="nameMainPhoto">Вибір головної фотографії</label> <br/>
          <img style=" height: 200px" src="{{ asset('/storage/'.$merch->name_main_photo) }}">
          <input  class="inputfile"  Value="{{$merch->name_main_photo}}" id="nameMainPhoto" name="nameMainPhoto"  type="file"></input>
          <br/>
         

          <label for="namePhoto1">Вибір  фото 1</label> <br/>
          <img style=" height: 200px" src="{{ asset('/storage/'.$merch->name_photo_1) }}"> 
          <input class="inputfile" Value="{{$merch->name_photo_1}}" id="namePhoto1" name="namePhoto1" type="file"></input>
          
           
          <label for="namePhoto2">Вибір  фото 2</label> <br/>
          <img style=" height: 200px" src="{{ asset('/storage/'. $merch->name_photo_2) }}">
          <input class="inputfile" Value="{{$merch->name_photo_2}}" id="namePhoto2" name="namePhoto2" type="file"></input>
          <br/>
         
          
           <br/>
          <input  class="inputSubmit" type="submit"  value="оновити"></input>
    </form>
    <br/> 
</div> 



@endsection