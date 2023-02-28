<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
     return view('welcome');
 });

Route::get('/', 'App\Http\Controllers\NewsController@submit');

Route::get('/sendingNews', function () {
    return view('sendingNews');
});

Route::get('/merch/addMerch', function ()
 {
    if (Auth::user()!=null && Auth::user()->admin)
        return view('/merch/addMerch');
     else
        return view('welcome');
});



Route::group(['namespace'=>'App\Http\Controllers\Merch'],function (){
  Route::get('/merch/showMerch', 'ShowMerchController');
  Route::get('/merch/buyMerch/{id}','BuyMerchController');
  Route::post('/merch/addMerch','AddMerchController');
  Route::get('/merch/merchOne/{id}','ShowOneMerchController');

  Route::get('/merch/delete/{id}','DeleteMerchController');
  Route::get('/merch/deleteMerch/{id}','ShowDeleteMerchController');

  Route::get('/merch/updateMerch/{id}','ShowUpdateMerchController');
  Route::post('/merch/updateMerch/{id}','UpdateMerchController');
  
  Route::post('/buyMerch','BuyMerchOrderController');
});






Route::get('/admin/admin', 'App\Http\Controllers\AdminController@submit');
Route::get('/admin/adminOrder', 'App\Http\Controllers\AdminController@adminOrder');

Route::get('/newsblockOne/{id}','App\Http\Controllers\NewsController@submitOne');

Route::post('/main','App\Http\Controllers\FormController@submit');
Route::post('/sendingNews','App\Http\Controllers\FormControllerNews@submit');



  //  return Request::all();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


