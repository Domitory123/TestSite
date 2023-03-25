<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Merch;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
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
  Route::get('/show/{merch}','show')->name('merch.show');
  Route::get('/buyMerch/{merch}','buy')->name('merch.buy');
  Route::post('/buyMerch','order')->name('merch.order');
 });


Route::prefix('merch')->controller(MerchController::class)->middleware(['admin'])->group(function () {
  Route::get('/create','create')->name('merch.create');
  Route::post('/merch','store')->name('merch.store'); 
  Route::get('/showDestroy/{merch}','showDestroy')->name('merchPage.destroy');
  Route::get('/destroy/{merch}','destroy')->name('merch.destroy');
  Route::get('/edit/{merch}','edit')->name('merch.edit');
  Route::post('/update/{merch}','update')->name('merch.update');
});

Route::prefix('admins')->controller(AdminController::class)->middleware(['admin'])->group(function () {
  Route::get('/admin', 'submit')->name('admin.submit');
  Route::get('/order', 'order')->name('admin.order');
 });


 Route::prefix('admins')->controller(CategoryController::class)->middleware(['admin'])->group(function () {
  Route::get('/categories', 'index')->name('categories.index');
 });


Route::controller(NewsController::class)->group(function () {
  Route::get('news/','index')->name('news.index');;
  Route::get('news/show/{news}','show')->name('news.show');
  Route::get('news/create','create')->name('news.create');
  Route::post('news/store','store')->name('news.store');
});


Route::view('/', 'welcome')->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

