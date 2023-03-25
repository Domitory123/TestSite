@extends('layouts.app')

@section("newsblockOne") 

 <div class="blockOneNews">
    <h1>Видалити  {{$merch->title}} ?</h1>
    <div class="mainPhoto" id="divMainImg" style="background-image: url({{ asset('/storage/' . $merch->name_main_photo) }});">
    </div> 

    <div class="text"> 
               </div>  
               <a href="\" >назад</a>
               <a href="{{route('merch.destroy',$merch) }}" >видалити</a>
      </div>
  </div>
</div>
     
 @endsection