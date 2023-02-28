@extends('layouts.app')

@section('showMerch')

<h1>Merch</h1>

<div class="container">
  @foreach($Merch as $merch)
       <div class="blokMerch">
          <a href="\merch\merchOne\{{$merch->id}}"><img class="photo" onclick="clickImg(this)" src="{{ asset('/storage/'. $merch->nameMainPhoto) }}" ></a>
           <div class="text">
                <strong>{{$merch->title}}</strong>
                <p>100 ₴</p>
           </div>
       </div>
   @endforeach 
  
</div>

<div>{{$Merch->links()}}</div>
@endsection