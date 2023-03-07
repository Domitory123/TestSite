<?php

namespace App\Http\Controllers\Merch;
use App\Models\Merch;
use App\Http\Controllers\Controller;
use App\Http\Requests\Merch\FilterRequest;
use App\Http\Filters\MerchFilter;
class ShowMerchController extends Controller
{
    public function __invoke(FilterRequest $request)
    {

      $data =  $request->validated();
      $filter=  app()->make(MerchFilter::class,['queryParams'=>array_filter($data)]);

      $Merch=Merch::filter($filter)->paginate(2);

      // $Merch=Merch::where('id',1)->paginate(2);
      return view('merch\showMerch',compact('Merch'));
    } 
}
