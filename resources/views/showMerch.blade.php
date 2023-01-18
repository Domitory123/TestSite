@extends('layouts.app')

@section('showMerch')


<h1>Merch</h1>
@foreach($Merch as $merch)

      

       <div class="container">
       <div class="blokMerch">
       
       <a href="#"><img class="photo" onclick="clickImg(this)" src="{{ asset('/storage/'. $merch->nameMainPhoto) }}" ></a>
       <div class="text">
              <strong>{{$merch->name}}</strong>
              <p>ціна100₴</p>
       </div>
       </div>
    @endforeach 

  

</div>

@endsection