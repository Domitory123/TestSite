<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class FormControllerNews extends Controller
{

     public function submit(Request $request)
     {
          $news = new News();
          $photoMainName = $request->file('fileMain')->store('uploads','public');
          $photoName1 = $request->file('file1')->store('uploads','public');
          $photoName2 = $request->file('file2')->store('uploads','public');

          $news->title=$request->input('title');
          $news->text=$request->input('text');
          $news->concise_text=$request->input('conciseText');
          $news->name_main_photo = $photoMainName;//$request->file('file')->getClientOriginalName();
          $news->name_photo_1= $photoName1;
          $news->name_photo_2= $photoName2;
          $news->save();

          return view('welcome');
     }

}