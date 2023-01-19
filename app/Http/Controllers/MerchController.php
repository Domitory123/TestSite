<?php

namespace App\Http\Controllers;
use App\Models\Merch;
use Illuminate\Support\Facades\Storage;
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
    return view('merch\showMerch',['Merch'=>Merch::all()]);
  }

    public function showMerch()
    {
     // unlink('uploads/JeErk2hsbKAp75p1lWencEqPnYyaHiyZZt1QeMsP.jpg');
     // Storage::delete(public_path('uploads/JeErk2hsbKAp75p1lWencEqPnYyaHiyZZt1QeMsP.jpg'));
     // unlink(asset('\storage\uploads\JeErk2hsbKAp75p1lWencEqPnYyaHiyZZt1QeMsP.jpg'));
      //unlink(public_path('uploads\JeErk2hsbKAp75p1lWencEqPnYyaHiyZZt1QeMsP.jpg'));
    //  app(Illuminate\Filesystem\Filesystem::class)->delete(public_path('uploads/JeErk2hsbKAp75p1lWencEqPnYyaHiyZZt1QeMsP.jpg'));
      return view('merch\showMerch',['Merch'=>Merch::all()]);
    }
     public function buyMerch($id)
     {
       return view('merch\buyMerch');
     }
     public function showMerchOne($id)
     {
        return view('merch\merchOne',['data'=>Merch::find($id)]);
     }

     public function deleteMerch($id)
     {
        return view('merch\deleteMerch',['data'=>Merch::find($id)]);
     }
     public function delete($id)
     {
     // $data->nameMainPhoto 
     // $data->namePhoto1
     // $data->namePhoto2 
      $merch = Merch::find($id);
     
       //dd( $merch->nameMainPhoto );
       Merch::find($id)->delete();
       //Merch::find($id)->delete();
       return view('merch\showMerch',['Merch'=>Merch::all()]);
     }

}