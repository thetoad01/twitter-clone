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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store')->name('tweets.store');

    Route::post('/tweets/{tweet}/like', 'TweetLikeController@store')->name('likes.store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikeController@destroy')->name('likes.destroy');

    Route::post('/profiles/{user:username}/follow', 'FollowsController@store');
    Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfilesController@update')->name('profile.update')->middleware('can:edit,user');

    Route::get('/explore', 'ExploreController@index')->name('explore.index');
});

Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');

Auth::routes();
