<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesReqiests;
class ShowOneMerchController extends Controller
{
    public function __invoke($id)
    { 
    
       //$this->authorize('view',auth()->user()); 
        return view('merch\merchOne',['data'=>Merch::find($id)]);
        
    } 
}
