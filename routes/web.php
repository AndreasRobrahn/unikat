<?php

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


Route::get('/', function(){
  return view('unikat');
})->name('unikat');
Route::post('/sendNotification', 'App\Http\Controllers\NotificationsController@CustomerNotification')->name('notification.customer');
Route::get('/aboutus', function(){
  return view('unikataboutus');
})->name('unikataboutus');
Route::get('/advantages', function(){
  return view('unikatSpeciality');
})->name('unikatSpeciality');
Route::get('/datasecurity', function(){
  return view('dsvgo1');
})->name('datasecurity');
Route::get('/joboffers', function(){
  return view('joboffers');
})->name('joboffers');
Route::get('/cookiesAccept', 'App\Http\Controllers\NotificationsController@setCookies');
