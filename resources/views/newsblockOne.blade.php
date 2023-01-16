@extends('layouts.app')

@section("newsblockOne") 

  <div class="blockOneNews">
    <h1> {{$data->title}}</h1>
    <div class="mainPhoto" id="divMainImg" style="background-image: url({{ asset('/storage/' . $data->nameMainPhoto) }});">

    </div> 
     
    <img class="imgClass" onclick="clickImg(this)" src="{{ asset('/storage/'. $data->nameMainPhoto) }}"> 
      <img class="imgClass" onclick="clickImg(this)" src="{{ asset('/storage/'. $data->namePhoto1) }}"> 
      <img class="imgClass" onclick="clickImg(this)" src="{{ asset('/storage/'. $data->namePhoto2) }}"> 
      
               <div class="text">
                
                  <p>{{$data->text}}</p>
              
               </div>  
               <a href="\" >назад</a>
   </div>
     

 @endsection