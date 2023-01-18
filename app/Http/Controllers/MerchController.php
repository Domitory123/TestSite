<?php

namespace App\Http\Controllers;
use App\Models\Merch;
use Illuminate\Http\Request;

class MerchController extends Controller
{
  public function addMerch(Request $request)
  {
    $merch = new Merch();

    $photoMainName = $request->file('fileMain')->store('uploads','public');
    $photoName1 = $request->file('file1')->store('uploads','public');
    $photoName2 = $request->file('file2')->store('uploads','public');

    $merch->title= $request->input('title');
    $merch->describe= $request->input('describe');
    $merch->nameMainPhoto = $photoMainName;
    $merch->namePhoto1= $photoName1;
    $merch->namePhoto2= $photoName2;
    $merch->save();
    return view('showMerch');
  }

    public function showMerch()
    {
      return view('showMerch',['Merch'=>Merch::all()]);
    }
     public function submit()
     {
       return view('showMerch');
     }
     public function submitOne($id)
     {
        return view('newsblockOne',['data'=>News::find($id)]);
     }

}