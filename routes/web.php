<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Merch;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\NewsController;
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

Route::get('/welcome', function ()
{return view('welcome');})->name('welcome');

Route::get('/sendingNews', function ()
{ return view('sendingNews');})->name('sendingNews');

Route::controller(MerchController::class)->group(function () {

  Route::get('/merch/index','index')->name('merch.index');
  Route::get('/merch/show/{id}','show')->name('merch.show');
  Route::get('/merch/buyMerch/{id}','buy')->name('merch.buy');
  Route::post('/merch/buyMerch','order')->name('merch.order');

 });

Route::controller(MerchController::class)->middleware(['admin'])->group(function () {

  Route::get('/merch/create', function ()
  {return view('/merch/create');})->name('merch.create');
  Route::post('/merch','store')->name('merch.store'); 
  
  Route::get('/merch/showDestroy/{id}','showDestroy')->name('merchPage.destroy');
  Route::get('/merch/destroy/{id}','destroy')->name('merch.destroy');
  
  Route::get('/merch/edit/{id}','edit')->name('merch.edit');
  Route::post('/merch/update/{id}','update')->name('merch.update');
});

Route::controller(AdminController::class)->middleware(['admin'])->group(function () {
  Route::get('/admin/admin', 'submit')->name('admin');
  Route::get('/admin/adminOrder', 'adminOrder')->name('adminOrder');
 });


 
Route::controller(NewsController::class)->group(function () {
  Route::get('/','submit');
  Route::get('/newsBlockOne/{id}','submitOne')->name('newsBlockOne');
});

Route::post('/sendingNews','App\Http\Controllers\FormControllerNews@submit')->name('sendingNews');;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

