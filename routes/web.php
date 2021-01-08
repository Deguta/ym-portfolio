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


  // お問い合わせ入力ページ
Route::get('/', 'ContactController@index')->name('contact');

// 確認ページ
Route::post('/confirm', 'ContactController@confirm')->name('confirm');

// DB挿入、メール送信
Route::post('/process', 'ContactController@process')->name('process');

// 完了ページ
Route::get('/complete', 'ContactController@complete')->name('complete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
