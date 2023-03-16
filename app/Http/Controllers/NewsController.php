<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Auth;

class NewsController extends Controller
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
