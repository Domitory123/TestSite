<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class DeleteMerchController extends Controller
{
    public function __invoke($id)
    {
         $merch = Merch::find($id);
           if($merch)
           { 
                 unlink(public_path('/storage//'.$merch->nameMainPhoto));
                 unlink(public_path('/storage//'.$merch->namePhoto1));
                 unlink(public_path('/storage//'.$merch->namePhoto2));
                 Merch::find($id)->delete();  
           }
          return view('merch\showMerch',['Merch'=>Merch::all()]);   
    } 
}
