<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Backend'], function(){
    Route::resource('dashboard', 'DashboardController');
});
Route::resource('dashboard', DashboardController::class);


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::group(['namespace' => 'Frontend'], function()
//{
    //Route::get('/', 'HomeController@index');
  //  Route::resource('home', 'HomeController');
//});

//Route::group(['middleware' => ['web','auth']],function()
//{
   // Route::group(['namespace' => 'Backend'], function()
   // {
      //  Route::resource('dashboard', 'DashboardController');
    //    Route::resource('pendidikan', 'PendidikanController');
  //  });
//});