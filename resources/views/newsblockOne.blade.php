@extends('layouts.app')

@section("newsblockOne") 

         <div class="blockNews">
         <div id="divMainImg" style="width: 60%; height: 600px;  background-size:contain;  background-repeat:no-repeat; background-image: url({{ asset('/storage/' . $data->nameMainPhoto) }});">
           </div> 
  <!-- <img  style="while:auto;  height:400px;" src="{{ asset('/storage/'. $data->nameMainPhoto) }}"> 
  <br/> -->
  <img class="imgClass" onclick="clickImg(this)" style="while:auto;  height:100px;" src="{{ asset('/storage/'. $data->nameMainPhoto) }}"> 
  <img class="imgClass" onclick="clickImg(this)" style="while:auto;  height:100px;" src="{{ asset('/storage/'. $data->namePhoto1) }}"> 
  <img class="imgClass" onclick="clickImg(this)" style="while:auto;  height:100px;" src="{{ asset('/storage/'. $data->namePhoto2) }}"> 
               <div class="text">
                    <div style="padding: 3%; ">
                  <p>{{$data->nameMainPhoto}}</p>
                        <p>{{$data->title}}</p>
                        <p>{{$data->text}}</p>
                    </div> 
                    <a href="\" >назад</a>
               </div>  
         </div>
       <br/> 

 @endsection