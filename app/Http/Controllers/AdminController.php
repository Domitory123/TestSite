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
        return view('admin\adminOrder',['Order'=>Order::all()]);         
     }


}
