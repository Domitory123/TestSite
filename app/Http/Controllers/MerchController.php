<?php

namespace App\Http\Controllers;
use App\Models\Merch;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Http\Requests\Merch\FilterRequest;
use App\Http\Filters\MerchFilter;
use App\Http\Requests\Merch\MerchRequest;
use App\Http\Controllers\MyBaseController;

class MerchController extends MyBaseController
{
  public function store(MerchRequest $request)
  {
    $request->validated();
    $this->servce->store($request);
    return redirect()->route('merch.index');
  }

  public function index(FilterRequest $request)
  {  
    $data =  $request->validated();
    $filter=  app()->make(MerchFilter::class,['queryParams'=>array_filter($data)]);
    $Merch=Merch::filter($filter)->paginate(2);
    return view('merch.index',compact('Merch'));
  }

  public function buy($id)
    {     
       $data= Merch::findOrFail($id);
       return view('merch.buy',compact('data'));
     }

     public function order(Request $request)
      {
        $this->servce->order($request);
        return redirect()->route('merch.index');
      }

     public function show($id)
     {
        return view('merch.show',['data'=>Merch::find($id)]);
     }

     public function showDestroy($id)
     {
        return view('merch\delete',['data'=>Merch::find($id)]);
     }
      
     public function destroy($id)
     {
       $this->servce->destroy($id);
       return redirect()->route('merch.index');
     }

     public function edit($id)
     {
        return view('merch\update',['Merch'=>Merch::find($id)]);
     }

     public function update($id, Request $request)
     {
        $data= $this->servce->update($id,$request);
        return view('merch.show',compact('data')); 
     }
}
