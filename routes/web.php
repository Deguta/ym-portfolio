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

/*
//ログイン認証後 投稿ができるようになっています
Route::group(['prefix' => 'contact','middleware' => 'auth'], function(){
    Route::get('index','ContactFormController@index');
  });
*/

//ログイン機能
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// About Meによる自己紹介文のルーティング
Route::get('/about_me/index', 'AboutMeController@index')->name('about_me.index');

//製作物によるルーティング
Route::get('/bulletin_board/index', 'BulletinBoardController@index')->name('bulletin_board.index');

//お問い合わせの送信メールのルーティング
Route::get('/contact/index', 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/complete', 'ContactController@send')->name('contact.send');
