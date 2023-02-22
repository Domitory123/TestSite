<?php

namespace App\Http\Controllers;
use App\Models\Merch;
use App\Models\Order;
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
      return view('merch\showMerch',['Merch'=>Merch::all()]);
    }
     public function buyMerch($id)
     {     
       return view('merch\buyMerch',['data'=>Merch::find($id)]);

       //return view('merch\buyMerch');
     }
     public function buyMerchOrder(Request $request)
      {

        // dd($request->input('id'));
         $order = new Order();
        
        //  $table->bigInteger("idMerch");
        //  $table->string('nameUser');
        //  $table->string('email')->unique();
        //  $table->string('deliveryAddress')->unique();
        //  $table->string('phoneNumber')->unique();
        //  $table->string('comment')->unique();
        //  $table->string('status')->unique(); 

           $str= $request->input('idMerch');
           $order->merch_id=   (int)$str;
           $order->nameUser= $request->input('nameUser');
           $order->email = $request->input('email');
           $order->deliveryAddress= $request->input('deliveryAddress');
           $order->comment= $request->input('comment');
           $order->phoneNumber= $request->input('phoneNumber');
           $order->status="оформлення";
           $order->save();

         return view('merch\showMerch',['Merch'=>Merch::all()]);

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
     public function updateMerch($id)
     {
      return view('merch\updateMerch',['Merch'=>Merch::find($id)]);
     }
     public function update($id, Request $request)
     {
       $merch = Merch::find($id);

       if($request->file('fileMain'))
       {
        $photoMainName = $request->file('fileMain')->store('uploads','public');
        $merch->nameMainPhoto = $photoMainName;
       }
       if($request->file('file1'))
       {
        $photoName1 = $request->file('file1')->store('uploads','public');
        $merch->namePhoto1= $photoName1;
       }

       if($request->file('file2'))
       {
        $photoName2 = $request->file('file2')->store('uploads','public');
        $merch->namePhoto2= $photoName2;
       }
       
       $merch->title= $request->input('title');
       $merch->describe= $request->input('describe');
       $merch->save();

      return view('merch\merchOne',['data'=>Merch::find($id)]);
     }

}