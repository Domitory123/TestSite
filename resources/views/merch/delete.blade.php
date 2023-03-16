@extends('layouts.app')

@section("newsblockOne") 

 <div class="blockOneNews">
    <h1>Видалити  {{$data->title}} ?</h1>
    <div class="mainPhoto" id="divMainImg" style="background-image: url({{ asset('/storage/' . $data->nameMainPhoto) }});">
    </div> 

    <div class="text"> 
               </div>  
               <a href="\" >назад</a>
               <a href="{{route('merch.destroy',$data->id) }}" >видалити</a>
      </div>
  </div>
</div>
     
 @endsection