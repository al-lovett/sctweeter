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
    return view('welcome1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/tweet', 'TweetsController@savetweet');

Route::post('/comment', 'TweetsController@savecomment');

Route::get('/edittweet/{id}', 'TweetsController@edittweet');



// ('/tweet/{tweet}/edit', 'TweetsController@edittweet');
