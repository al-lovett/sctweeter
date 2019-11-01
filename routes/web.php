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
Route::get('/', function() {
  return view('splash');
});

Route::get('/welcome', function () {
    return view('welcome1');
});

Auth::routes();

Route::get('/home', 'TweetsController@index')->name('home');

Route::post('/tweet', 'TweetsController@savetweet');

Route::post('/comment', 'TweetsController@savecomment');

// old route to edittweet
// Route::get('/edittweet/{id}', 'TweetsController@edittweet');

Route::get('/editTweet/{id}/edit', 'TweetsController@editTweet')->name( 'editTweet');

Route::post('/editTweet/{id}/edit', 'TweetsController@update')->name( 'editTweet');

// ('/tweet/{tweet}/edit', 'TweetsController@edittweet');
