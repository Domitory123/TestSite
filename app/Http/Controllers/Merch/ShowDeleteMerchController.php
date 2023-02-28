<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;

class ShowDeleteMerchController extends Controller
{
    public function __invoke($id)
    {      
        return view('merch\deleteMerch',['data'=>Merch::find($id)]);
    } 
}
