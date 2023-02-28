<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;

class ShowMerchController extends Controller
{
    public function __invoke()
    {
      $Merch=Merch::paginate(2);
      return view('merch\showMerch',compact('Merch'));
    } 
}
