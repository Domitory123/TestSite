@extends('layouts.app')

@section('sendingNews')
<div class="sendingNews">
  <h1>Відправте нам новину</h1>
  <hr/>
    <form action="/sendingNews" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}	
          <label for="title">Назва123123</label><br/>
          <input class="inputText" id="title" name="title" type="text"></input>
          <br/>
          <label for="conciseText">Скорочений  текст</label><br/>
          <input class="inputText" id="conciseText" name="conciseText" type="text"></input>
          <br/>
          <label for="text">Текст</label> <br/>
         
          <input class="inputText" rows="15" cols="92" id="text" name="text" type="text"></input> 
         

          <textarea id="wmd-input" name="post-text" cols="28"  rows="5" ></textarea> <br/>
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