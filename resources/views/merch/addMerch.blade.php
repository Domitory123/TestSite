@extends('layouts.app')

@section('addMerch')
<div class="sendingNews">
  <h3>добавлення товару</h3>
  <hr/>
    <form action="/merch/addMerch" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}	
          <label for="title">Назва</label><br/>
          <input class="inputText" id="title" name="title" type="text"></input>
          <br/>
          <label for="describe">Опис</label> <br/>
          <textarea name="describe" cols="28"  rows="5" ></textarea> <br/>
          <label for="fileMain">Вибір головної фотографії</label> <br/>
          <input  class="inputfile" id="fileMain" name="fileMain" type="file"></input>
          <br/>
          <label for="file1">Вибір  фото 1</label> <br/>
          <input class="inputfile" id="file1" name="file1" type="file"></input>
          <br/>
          <label for="file2">Вибір  фото 2</label> <br/>
          <input class="inputfile" id="file2" name="file2" type="file"></input>
          <br/> <br/>
          <input  class="inputSubmit" type="submit" ></input>
    </form>
    <br/> 
</div> 

@endsection