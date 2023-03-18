@extends('layouts.app')

@section('showMerch')

<h1>Merch</h1>

<div class="container">
  @foreach($merchs as $merch)
       <div class="blokMerch">
          <a href="{{route('merch.show',$merch->id) }}"   ><img class="photo" onclick="clickImg(this)" src="{{ asset('/storage/'. $merch->name_main_photo) }}" ></a>
           <div class="text">
                <strong>{{$merch->title}}</strong>
                <p>100 ₴</p>
           </div>
       </div>
   @endforeach 
  
  

</div>

<div>{{$merchs->withQueryString()->links()}}</div>
@endsection