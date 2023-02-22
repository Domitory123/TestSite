<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
     public function submit()
     {
        return view('admin\admin');   
     }
     public function  adminOrder()
     {
        //$order = new Order();
      //  $order =  Order::find(1);
       // $order =  Order::all();
       // dd($order->merch->id);

        return view('admin\adminOrder',['Order'=>Order::all()]);
           
     }

    


}
