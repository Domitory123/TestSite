<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Merch\MerchRequest;
class AddMerchController extends Controller
{
    public function __invoke(MerchRequest $request)
    { 
        $request->validated();

          $merch = new Merch();
          $photoMainName = $request->file('nameMainPhoto')->store('uploads','public');
          $photoName1 = $request->file('namePhoto1')->store('uploads','public');
          $photoName2 = $request->file('namePhoto1')->store('uploads','public');
      
          $merch->title= $request->input('title');
          $merch->describe= $request->input('describe');
          $merch->nameMainPhoto = $photoMainName;
          $merch->namePhoto1= $photoName1;
          $merch->namePhoto2= $photoName2;
          $merch->save();
          
          return view('merch\showMerch',['Merch'=>Merch::all()]);
        
    } 
}
