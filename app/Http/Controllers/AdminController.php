<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
     public function submit()
     {
        return view('admins.admin');   
     }
     public function  order()
     {
        $orders = Order::all();
        return view('admins.order',compact('orders'));  
     }    
}
