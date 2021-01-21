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


// aboutのルーティング
Route::get('/about_me/index', 'AboutMeController@index')->name('about_me.index');

// skillのルーティング
Route::get('/skill/index', 'SkillController@index')->name('skill.index');



//portfolioのルーティング
Route::get('/online_reviews/top', 'OnlineReviewsController@index')->name('top.index');
Route::get('/online_reviews/hospital', 'OnlineReviewsController@index')->name('hospital.index');

//storyのルーティング
Route::get('/story/index', 'StoryController@index')->name('story.index');


//お問い合わせの送信メールのルーティング
Route::get('/contact/index', 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/complete', 'ContactController@send')->name('contact.send');
