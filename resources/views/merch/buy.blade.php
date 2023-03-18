@extends('layouts.app')

@section("buyMerch")

<div class="sendingNews">
  <h3>Замовлення</h3>
 
    <h1> {{$merchs->title}}</h1>
    <div  style="height:500px;  background-image: url({{ asset('/storage/' . $merchs->name_main_photo) }});">
     <img style=" height: 200px" src="{{ asset('/storage/'. $merchs->name_main_photo) }}"> 
    </div> 
  <hr/>
    <form action="{{ route('merch.order') }}"  method="post" enctype="multipart/form-data">
        {{ csrf_field() }}	

       
          <label for="name_user"> Ім'я та фамілія отримувача</label><br/>
          <input class="inputText" id="name_user" name="name_user" type="text"></input>
          <br/>

          <label for="delivery_address">Адреса доставки</label><br/>
          <input class="inputText" id="delivery_address" name="delivery_address" type="text"></input>
          <br/>      
         
          <label for="email">Електронна пошта</label><br/>
          <input class="inputText" id="email" name="email" type="email"></input>
          <br/>   

          <label for="phone_number">Номер телефону</label><br/>
          <input class="inputText" id="phone_number" name="phone_number" type="text"></input>
          <br/> 

          <label for="comment">Коментар до замовлення</label> <br/>
          <textarea name="comment" cols="28"  rows="5" ></textarea><br/>
         
          <input style="display:none;" id="id" name="merch_id" type="text" value="{{$merchs->id}}" > </input>

          <input  class="inputSubmit" type="submit" ></input>
    </form>
    <br/> 
</div> 
               <a href="\" >назад</a>
               <a href="\" >купити</a>
             
     

 @endsection