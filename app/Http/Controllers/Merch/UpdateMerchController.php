<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
//use App\Http\Requests\Merch\MerchRequest;

class UpdateMerchController extends Controller
{
    public function __invoke($id, Request $request)
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
          $data=$merch;
          return view('merch\merchOne',compact('data'));
        // return view('merch\merchOne',['data'=>Merch::find($id)]);
        
        
    } 
}
