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

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/welcome', function () {
     return view('welcome');
 });
 //Route::get('/', function () {
 //   return view('show');
//});

Route::get('/', 'App\Http\Controllers\HomeController@submit');

Route::get('/sendingNews', function () {
    return view('sendingNews');
});

Route::get('/newsblockOne/{id}','App\Http\Controllers\HomeController@submitOne');
Route::post('/','App\Http\Controllers\FormController@submit');
Route::post('/sendingNews','App\Http\Controllers\FormControllerNews@submit');



  //  return Request::all();


