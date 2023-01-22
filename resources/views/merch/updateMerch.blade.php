@extends('layouts.app')

@section('updateMerch')
<div class="sendingNews">
  <h3>редагування товару</h3>
  <hr/>
    <form action="/merch/updateMerch/{{$Merch->id}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}	
          <label for="title">Назва</label><br/>
          <input value="{{$Merch->title}}" class="inputText" id="title" name="title" type="text"></input>
          <br/>
          <label for="describe">Опис</label> <br/>
          <textarea   name="describe" cols="28"  rows="5" >{{$Merch->describe}}</textarea> <br/>
          <label for="fileMain">Вибір головної фотографії</label> <br/>
          <img style=" height: 200px" src="{{ asset('/storage/'.$Merch->nameMainPhoto) }}">  
          <input  class="inputfile" id="fileMain" name="fileMain" type="file"></input>
          <br/>
          <label for="file1">Вибір  фото 1</label> <br/>
          <img style=" height: 200px" src="{{ asset('/storage/'.$Merch->namePhoto1) }}"> 
          <input class="inputfile" id="file1" name="file1" type="file"></input>
          <br/>
          <label for="file2">Вибір  фото 2</label> <br/>
          <img style=" height: 200px" src="{{ asset('/storage/'. $Merch->namePhoto2) }}">
          <input class="inputfile" Value="{{$Merch->nameMainPhoto}}" id="file2" name="file2" type="file"></input>
          <br/> <br/>
          <input  class="inputSubmit" type="submit" value="оновити" > </input>
    </form>
    <br/> 
</div> 

@endsection