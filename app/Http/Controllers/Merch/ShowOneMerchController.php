<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;

class ShowOneMerchController extends Controller
{
    public function __invoke($id)
    { 
      
        return view('merch\merchOne',['data'=>Merch::find($id)]);
        
    } 
}
