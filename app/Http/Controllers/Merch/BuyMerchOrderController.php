<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;

use App\Models\Order;
use Illuminate\Http\Request;

class BuyMerchOrderController extends Controller
{
    public function __invoke(Request $request)
    { 
            $order = new Order();
      
             $str= $request->input('idMerch');
             $order->merch_id=(int)$str;
             $order->nameUser= $request->input('nameUser');
             $order->email = $request->input('email');
             $order->deliveryAddress= $request->input('deliveryAddress');
             $order->comment= $request->input('comment');
             $order->phoneNumber= $request->input('phoneNumber');
             $order->status="оформлення";
             $order->save();
  
           return view('merch\showMerch',['Merch'=>Merch::all()]);
   
    } 
}
