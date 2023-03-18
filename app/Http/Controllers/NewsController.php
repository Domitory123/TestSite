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
       $news=News::all();
       return view('newsblock',compact('news'));
    }
    public function submitOne($id)
    {      
       $news=News::find($id);
       return view('newsblockOne',compact('news'));
    }
 
}
