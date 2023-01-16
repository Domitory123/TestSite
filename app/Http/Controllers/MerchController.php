<?php

namespace App\Http\Controllers;

class MerchController extends Controller
{
     public function submit()
     {
       return view('allMerch');

     }
     public function submitOne($id)
     {
        return view('newsblockOne',['data'=>News::find($id)]);
     }
}