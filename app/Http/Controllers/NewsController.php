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
          
     //if (\Auth::user()!=null && \Auth::user()->admin)
     return view('newsblockOne',['data'=>News::find($id)]);
      // else
     //return view('welcome');

       //return view('newsblockOne',['data'=>News::find($id)]);
    }


   
}
