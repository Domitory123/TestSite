<?php

namespace App\Servisec\Merch;

use App\Models\Merch;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Http\Requests\Merch\FilterRequest;
use App\Http\Filters\MerchFilter;
use App\Http\Requests\Merch\MerchRequest;

class Service
{
    public function store(MerchRequest $request)
    {
      $merch = new Merch();
      $photoMainName = $request->file('nameMainPhoto')->store('uploads','public');
      $photoName1 = $request->file('namePhoto1')->store('uploads','public');
      $photoName2 = $request->file('namePhoto2')->store('uploads','public');
  
      $merch->title= $request->input('title');
      $merch->describe= $request->input('describe');
      $merch->nameMainPhoto = $photoMainName;
      $merch->namePhoto1= $photoName1;
      $merch->namePhoto2= $photoName2;
      $merch->save(); 
    }

    public function order(Request $request)
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
    }

    public function destroy($id)
    {
      $merch = Merch::find($id);
       if($merch)
       { 
             unlink(public_path('storage\\'.$merch->nameMainPhoto));
             unlink(public_path('storage\\'.$merch->namePhoto1));
             unlink(public_path('storage\\'.$merch->namePhoto2));
             Merch::find($id)->delete();  
       }
    }

    public function update($id, Request $request)
    {
           $merch = Merch::find($id);  
           if($request->file('nameMainPhoto'))
           {
            $photoMainName = $request->file('nameMainPhoto')->store('uploads','public');
            $merch->nameMainPhoto = $photoMainName;
           }
           if($request->file('namePhoto1'))
           {
            $photoName1 = $request->file('namePhoto1')->store('uploads','public');
            $merch->namePhoto1= $photoName1;
           }
           if($request->file('namePhoto2'))
           {
            $photoName2 = $request->file('namePhoto2')->store('uploads','public');
            $merch->namePhoto2= $photoName2;
           }
           
           $merch->title= $request->input('title');
           $merch->describe= $request->input('describe');
           $merch->save();
           return $merch;
        
    }




}