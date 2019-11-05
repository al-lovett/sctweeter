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

Route::post('/comment', 'CommentsController@savecomment');

Route::post('editcomment/{id}/destroy', 'CommentsController@destroy')->name( 'comment.destroy');

Route::get('/editcomment/{id}/edit', 'CommentsController@editcomment')->name( 'editcomment');

Route::post('/editcomment/{id}/edit', 'CommentsController@update')->name( 'editcomment');

Route::post('edittweet/{id}/destroy', 'TweetsController@destroy')->name( 'tweet.destroy');

// old route to edittweet
// Route::get('/edittweet/{id}', 'TweetsController@edittweet');

Route::get('/editTweet/{id}/edit', 'TweetsController@editTweet')->name( 'editTweet');

Route::post('/editTweet/{id}/edit', 'TweetsController@update')->name( 'editTweet');

// ('/tweet/{tweet}/edit', 'TweetsController@edittweet');

Route::get('/profiles', 'UserProfilesController@index');

Route::get('/profilesupdate/{id}', 'UserProfilesController@edit');

Route::post('/profilesupdate/{id}', 'UserProfilesController@update');
