@extends('layouts.app')

@section('content')
<div class="MyContainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin2!') }}</div>

                <div class="card-body">    
                    <a href="{{ route('admin.order') }}">Замовлення</a>
                    <a href="{{ route('admin.submit') }}">Мерч</a>
                    <a href="{{ route('admin.submit') }}">Новини</a>
                </div>

            </div>
        </div>
    </div>
   
       
       <table class="TableOrders"  >
       <thead >
       <tr >
             <th >id</th>
             <th>імя замовника</th>
             <th>пошта</th>
             <th>адреса доставки</th>
             <th>номер телефону</th>
             <th>коментар</th>
             <th>статус</th>
             <th>товар</th>
             <th>фото</th>
         </tr>
       </thead>
     <tbody >
        @foreach($orders as $order)

            <tr >
                <td>{{$order->id}}</td>
                <td>{{$order->name_user}}</td>
                <td>{{$order->email}}</td>   
                <td>{{$order->delivery_address}}</td>
                <td>{{$order->phone_number}}</td>
                <td>{{$order->comment}}</td>
                <td>{{$order->status}}</td>
            </tr>
            @foreach($order->merch as $merch)
            <tr >
                <td>{{$merch->id}}</td>
                <td>{{$merch->title}}</td>
                <td>{{$merch->category->name}}</td>
                <td><img style=" height: 100px" src="{{ asset('/storage/'.$merch->name_main_photo) }}"> </td>
               
            </tr>
            @endforeach


            @endforeach
        </tbody>
           
       </table>
              
     
    
                

    

</div>
      


@endsection
