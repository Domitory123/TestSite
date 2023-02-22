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

Route::get('/merch/buyMerch/{id}','App\Http\Controllers\MerchController@buyMerch');
Route::get('/merch/merchOne/{id}','App\Http\Controllers\MerchController@showMerchOne');
Route::get('/merch/deleteMerch/{id}','App\Http\Controllers\MerchController@deleteMerch');
Route::get('/merch/delete/{id}','App\Http\Controllers\MerchController@delete');
Route::get('/merch/showMerch', 'App\Http\Controllers\MerchController@showMerch');
Route::post('/merch/addMerch','App\Http\Controllers\MerchController@addMerch');
Route::get('/merch/updateMerch/{id}','App\Http\Controllers\MerchController@updateMerch');
Route::post('/merch/updateMerch/{id}','App\Http\Controllers\MerchController@update');
Route::post('/buyMerch','App\Http\Controllers\MerchController@buyMerchOrder');


Route::get('/admin/admin', 'App\Http\Controllers\AdminController@submit');
Route::get('/admin/adminOrder', 'App\Http\Controllers\AdminController@adminOrder');



Route::get('/newsblockOne/{id}','App\Http\Controllers\NewsController@submitOne');

Route::post('/main','App\Http\Controllers\FormController@submit');
Route::post('/sendingNews','App\Http\Controllers\FormControllerNews@submit');



  //  return Request::all();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


