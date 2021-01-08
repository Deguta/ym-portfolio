<?php

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

//ログイン認証後 投稿ができるようになっています
//Route::group(['prefix' => 'contact','middleware' => 'auth'], function(){
   // Route::get('index','ContactFormController@index');
  //});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
