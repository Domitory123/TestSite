<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;

class BuyMerchController extends Controller
{
    public function __invoke($id)
    {
       $data= Merch::findOrFail($id);
       return view('merch\buyMerch',compact('data'));
    } 
}
