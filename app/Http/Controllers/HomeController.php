<?php

namespace App\Http\Controllers;

use App\Models\News;

class HomeController extends Controller
{
     public function submit()
     {
       return view('newsblock',['data'=>News::all()]);
     }
     public function submitOne($id)
     {
        return view('newsblockOne',['data'=>News::find($id)]);
     }
}