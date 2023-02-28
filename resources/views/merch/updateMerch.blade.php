@extends('layouts.app')

@section('updateMerch')
<div class="sendingNews">
  <h3>редагування товару  </h3>
  
  <hr/>
  <form action="/merch/updateMerch/{{$Merch->id}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}	
          <label for="title">Назва</label><br/>
          <input class="inputText" id="title" name="title" type="text" value="{{$Merch->title}}"></input>
          <br/>
           @error('title')
           <b class="text-danger" >{{$message}}</b>
           <br/>
           @enderror
         

          <label for="describe">Опис</label> <br/>
          <textarea name="describe" cols="28"  rows="5" >{{$Merch->describe}}</textarea> <br/>
          @error('describe')
           <b class="text-danger">{{$message}}</b>
           @enderror
         
         
          <label for="nameMainPhoto">Вибір головної фотографії</label> <br/>
          <img style=" height: 200px" src="{{ asset('/storage/'.$Merch->nameMainPhoto) }}">
          <input  class="inputfile"  Value="{{$Merch->nameMainPhoto}}" id="nameMainPhoto" name="nameMainPhoto"  type="file"></input>
          <br/>
         

          <label for="namePhoto1">Вибір  фото 1</label> <br/>
          <img style=" height: 200px" src="{{ asset('/storage/'.$Merch->namePhoto1) }}"> 
          <input class="inputfile" Value="{{$Merch->namePhoto1}}" id="namePhoto1" name="namePhoto1" type="file"></input>
          
           
          <label for="namePhoto2">Вибір  фото 2</label> <br/>
          <img style=" height: 200px" src="{{ asset('/storage/'. $Merch->namePhoto2) }}">
          <input class="inputfile" Value="{{$Merch->namePhoto2}}" id="namePhoto2" name="namePhoto2" type="file"></input>
          <br/>
         
           <br/>
          <input  class="inputSubmit" type="submit"  value="оновити"></input>
    </form>
    <br/> 
</div> 



@endsection