<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;

class ShowUpdateMerchController extends Controller
{
    public function __invoke($id)
    {  
        return view('merch\updateMerch',['Merch'=>Merch::find($id)]);      
    } 
}
