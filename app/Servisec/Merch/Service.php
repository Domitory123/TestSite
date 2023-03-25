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
      $merch = $this->updatePhoto($merch, $request);
      $merch->title= $request->input('title');
      $merch->describe= $request->input('describe');
      $merch->сategory_id= $request->input('categore');
      $merch->save(); 
    }

    public function order(Request $request)
    {
      $data = $request->validate([
        'name_user' => 'string',
        'email' => 'email',
        'delivery_address' => 'string',
        'comment' => 'string',
        'phone_number' => 'string'
       ]);
       Order::create($data)->merch()->attach($request->input('merch_id'));
    }

    public function destroy(Merch $merch)
    {
       unlink(public_path('storage\\'.$merch->name_main_photo));
       unlink(public_path('storage\\'.$merch->name_photo_1));
       unlink(public_path('storage\\'.$merch->name_photo_2));
       $merch->delete();     
    }

    public function update(Merch  $merch, Request $request)
    {
       $merch = $this->updatePhoto($merch, $request);
       $merch->title= $request->input('title');
       $merch->describe= $request->input('describe');
       $merch->сategory_id=$request->input('categore');
       $merch->save();
       return $merch;
    }

    public function updatePhoto(Merch $merch, Request $request)
    {
      if($request->file('nameMainPhoto'))
      {
        $photoMainName = $request->file('nameMainPhoto')->store('uploads','public');
        $merch->name_main_photo = $photoMainName;
      }
      if($request->file('namePhoto1'))
      {
       $photoName1 = $request->file('namePhoto1')->store('uploads','public');
       $merch->name_photo_1= $photoName1;
      }
      if($request->file('namePhoto2'))
      {
       $photoName2 = $request->file('namePhoto2')->store('uploads','public');
       $merch->name_photo_2= $photoName2;
      }
      return $merch;
    }
}