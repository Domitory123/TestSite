@extends('layouts.app')

@section("newsblockOne") 

  <div class="blockOneNews">
    <h1> {{$news->title}}</h1>
    <div class="mainPhoto" id="divMainImg" style="background-image: url({{ asset('/storage/' . $news->name_main_photo) }});">

    </div> 
     
      <img class="imgClass" onclick="clickImg(this)" src="{{ asset('/storage/'. $news->name_main_photo) }}"> 
      <img class="imgClass" onclick="clickImg(this)" src="{{ asset('/storage/'. $news->name_photo_1) }}"> 
      <img class="imgClass" onclick="clickImg(this)" src="{{ asset('/storage/'. $news->name_photo_2) }}"> 

               <div class="text">
                
                  <p>{{$news->text}}</p>
              
               </div>  
               <a href="\" >назад</a>
   </div>
     

 @endsection