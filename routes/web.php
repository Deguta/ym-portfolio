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


//ログイン機能
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




// aboutのルーティング
Route::get('/about_me/index', 'AboutMeController@index')->name('about_me.index');

// skillのルーティング
Route::get('/skill/index', 'SkillController@index')->name('skill.index');



//portfolioのルーティング
Route::get('/portfolio/top', 'PortfolioController@index')->name('portfolio.index'); //portfolioのトップページ

//OnlineReviewsのルーティングとログインしないとページに遷移できないようにmiddlewareを記述
Route::group(['prefix' => 'online_reviews','middleware' => 'auth'], function(){
  Route::get('hospital','OnlineReviewsController@index')->name('online_reviews.index'); // hospitalの一覧表
  Route::get('create','OnlineReviewsController@create')->name('online_reviews.create');
});


//storyのルーティング
Route::get('/story/index', 'StoryController@index')->name('story.index');


//お問い合わせの送信メールのルーティング
Route::get('/contact/index', 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/complete', 'ContactController@send')->name('contact.send');
