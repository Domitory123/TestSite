@extends('layouts.app')

@section('showMerch')

<h1>Merch</h1>

<form action="{{route('merch.index')}}" method="get" enctype="multipart/form-data">   
<select name="sort">
  <option value="">стандартно</option>
  <option value="ascending">по зростанню</option>
  <option value="descending">по спаданню</option>
</select>
     <input class="inputText" id="title" name="title" type="text" value="{{old('title')}}"></input>    
     <input  class="inputSubmit" type="submit"  value="пошку"></input>
</form>

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