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
Route::prefix('merch')->controller(MerchController::class)->group(function () {
  Route::get('/index','index')->name('merch.index');
  Route::get('/show/{id}','show')->name('merch.show');
  Route::get('/buyMerch/{id}','buy')->name('merch.buy');
  Route::post('/buyMerch','order')->name('merch.order');
 });

Route::prefix('merch')->controller(MerchController::class)->middleware(['admin'])->group(function () {
  Route::get('/create', function ()
  {return view('merch/create');})->name('merch.create');
  Route::post('/merch','store')->name('merch.store'); 
  Route::get('/showDestroy/{id}','showDestroy')->name('merchPage.destroy');
  Route::get('/destroy/{id}','destroy')->name('merch.destroy');
  Route::get('/edit/{id}','edit')->name('merch.edit');
  Route::post('/update/{id}','update')->name('merch.update');
});


Route::prefix('admins')->controller(AdminController::class)->middleware(['admin'])->group(function () {
  Route::get('/admin', 'submit')->name('admin.submit');
  Route::get('/order', 'order')->name('admin.order');
 });

Route::controller(NewsController::class)->group(function () {
  Route::get('/','submit');
  Route::get('/newsBlockOne/{id}','submitOne')->name('newsBlockOne');
});

Route::get('/welcome', function ()
{return view('welcome');})->name('welcome');

Route::get('/sendingNews', function ()
{ return view('sendingNews');})->name('sendingNews');

Route::post('/sendingNews','App\Http\Controllers\FormControllerNews@submit')->name('sendingNews');;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

