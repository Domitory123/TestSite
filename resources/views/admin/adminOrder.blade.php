@extends('layouts.app')

@section('content')
<div class="MyContainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin2!') }}</div>

                <div class="card-body">    
                    <a href="\admin\adminOrder">Замовлення</a>
                    <a href="\admin\admin">Мерч</a>
                    <a href="\admin\admin">Новини</a>
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
        @foreach($Order as $order)

            <tr >
                <td >{{$order->merch_id}}</td>
                <td>{{$order->nameUser}}</td>
                <td>{{$order->email}}</td>   
                <td>{{$order->deliveryAddress}}</td>
                <td>{{$order->phoneNumber}}</td>
                <td>{{$order->comment}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->merch->title}}</td>

                <td><img style=" height: 100px" src="{{ asset('/storage/'. $order->merch->nameMainPhoto) }}"> </td>

            </tr>
            @endforeach
        </tbody>
           
       </table>
              
    
                
                

    

</div>
      


@endsection
