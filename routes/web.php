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


//ログアウト中のページ
Route::group(['middleware' => 'guest'], function () {


Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/register', 'Auth\RegisterController@registerView');

Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');
});




//ログイン中のページ
// ログイン後最初の画面

Route::group(['middleware' => 'auth'], function () {
    // Route::middleware(['auth'])->group(function () {

Route::get('/top','PostsController@index')->name('default');
Route::post('/top','PostsController@index')->name('default');


Route::post('/top','PostsController@post');

Route::post('/top/{id}/update','PostsController@update')->name('update');

Route::post('/top/{id}/delete','PostsController@delete')->name('delete');

Route::get('/profile','UsersController@profile');

Route::post('/profile','UsersController@editPro')->name('editPro');



Route::get('/search','UsersController@search');
Route::post('/search','UsersController@search');

// フォローするルート
Route::get('/following/{id}','FollowsController@newFollow')->name('newFollow');
// フォロー解除ルート
Route::get('/stop/{id}','FollowsController@stopFollow')->name('stopFollow');

Route::get('/search_result','UsersController@surf');
Route::post('/search_result','UsersController@surf');


Route::get('/follow-list','FollowsController@followList');
Route::get('/others/{id}','UsersController@othersProfile')->name('othersProfile');

Route::get('/follower-list','FollowsController@followerList');

Route::get('/logout','Auth\LoginController@logout');
});
    //
