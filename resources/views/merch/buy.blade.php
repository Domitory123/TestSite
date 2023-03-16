@extends('layouts.app')

@section("buyMerch")

<div class="sendingNews">
  <h3>Замовлення</h3>
 
    <h1> {{$data->title}}</h1>
    <div  style="height:500px;  background-image: url({{ asset('/storage/' . $data->nameMainPhoto) }});">
     <img style=" height: 200px" src="{{ asset('/storage/'. $data->nameMainPhoto) }}"> 
    </div> 
  <hr/>
    <form action="{{ route('merch.order') }}"  method="post" enctype="multipart/form-data">
        {{ csrf_field() }}	

          <label for="nameUser"> Ім'я та фамілія отримувача</label><br/>
          <input class="inputText" id="title" name="nameUser" type="text"></input>
          <br/>

          <label for="deliveryAddress">Адреса доставки</label><br/>
          <input class="inputText" id="deliveryAddress" name="deliveryAddress" type="text"></input>
          <br/>      
         
          <label for="email">Електронна пошта</label><br/>
          <input class="inputText" id="email" name="email" type="email"></input>
          <br/>   

          <label for="phoneNumber">Номер телефону</label><br/>
          <input class="inputText" id="phoneNumber" name="phoneNumber" type="text"></input>
          <br/> 

          <label for="comment">Коментар до замовлення</label> <br/>
          <textarea name="comment" cols="28"  rows="5" ></textarea><br/>
         
          <input style="display:none;" id="id" name="idMerch" type="text" value="{{$data->id}}" > </input>

          <input  class="inputSubmit" type="submit" ></input>
    </form>
    <br/> 
</div> 
               <a href="\" >назад</a>
               <a href="\" >купити</a>
             
     

 @endsection