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

Route::get('/', 'App\Http\Controllers\HomeController@submit');

Route::get('/sendingNews', function () {
    return view('sendingNews');
});
Route::get('/merch/addMerch', function () {
    return view('/merch/addMerch');
});



Route::get('/merch/buyMerch/{id}','App\Http\Controllers\MerchController@buyMerch');
Route::get('/merch/merchOne/{id}','App\Http\Controllers\MerchController@showMerchOne');
Route::get('/merch/deleteMerch/{id}','App\Http\Controllers\MerchController@deleteMerch');
Route::get('/merch/delete/{id}','App\Http\Controllers\MerchController@delete');
Route::get('/merch/showMerch', 'App\Http\Controllers\MerchController@showMerch');
Route::post('/merch/addMerch','App\Http\Controllers\MerchController@addMerch');
Route::get('/merch/updateMerch/{id}','App\Http\Controllers\MerchController@updateMerch');
Route::post('/merch/updateMerch/{id}','App\Http\Controllers\MerchController@update');


Route::get('/newsblockOne/{id}','App\Http\Controllers\HomeController@submitOne');
Route::post('/','App\Http\Controllers\FormController@submit');
Route::post('/sendingNews','App\Http\Controllers\FormControllerNews@submit');


  //  return Request::all();


