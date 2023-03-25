<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\Merch\FilterRequest;
use App\Http\Filters\MerchFilter;
use App\Http\Requests\Merch\MerchRequest;
use App\Models\Category;

class MerchController extends MyBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request)
    {
      $data = $request->validated();
      $filter = app()->make(MerchFilter::class,['queryParams'=>array_filter($data)]);
      $merchs = Merch::filter($filter)->paginate(2);
      $categories = Category::all();
      return view('merch.index',compact('merchs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('merch.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MerchRequest $request)
    { 
        $request->validated();
        $this->servce->store($request);
        return redirect()->route('merch.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function show(Merch $merch)
    {
        return view('merch.show',compact('merch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function edit(Merch $merch)
    {
        $categories = Category::all();
        return view('merch.update',compact('merch','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function update(Merch $merch, Request $request)
    {
        $this->servce->update($merch,$request);
        return redirect()->route('merch.index');  
       //return view('merch.show',compact('merch')); 
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merch $merch)
    {
       $this->servce->destroy($merch);
       return redirect()->route('merch.index');
    }

    public function showDestroy(Merch $merch)
    {
      // $merch = Merch::find($id);
     // $merch= Merch::findOrFail($id);
       return view('merch.delete',compact('merch'));
    }

    public function buy(Merch $merch)
    {     
      return view('merch.buy',compact('merch'));
    }

    public function order(Request $request)
    {
      $this->servce->order($request);
      return redirect()->route('merch.index');
    }
}
