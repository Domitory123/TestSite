@extends('layouts.app')

@section("newsblockOne") 

  <div class="blockOneNews">
    <h1> {{$merch->title}}</h1>
    <div class="mainPhoto" id="divMainImg" style="background-image: url({{ asset('/storage/' . $merch->name_main_photo) }});">

    </div> 
     
      <img class="imgClass" onclick="clickImg(this)" src="{{ asset('/storage/'. $merch->name_main_photo) }}"> 
      <img class="imgClass" onclick="clickImg(this)" src="{{ asset('/storage/'. $merch->name_photo_1) }}"> 
      <img class="imgClass" onclick="clickImg(this)" src="{{ asset('/storage/'. $merch->name_photo_2) }}"> 


               <div class="text">
                  <p>{{$merch->text}}</p>
                  <p>{{$merch->category->name}}</p>
                  
               </div>  
                  <a href="\" >назад</a>
                  <a href="{{route('merch.buy',$merch)}}" >купити</a>

                  @can('view',auth()->user()) 
                     <a href="{{route('merchPage.destroy',$merch)}}">видалити</a>
                     <a href="{{route('merch.edit',$merch)}}">редагувати</a>                    
                  @endcan        
               </div>
             

 @endsection