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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/register', 'Auth\RegisterController@register_view');
// Route::post('/register', 'Auth\RegisterController@register_view');

// Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');

Route::get('logout','Auth\LoginController@login');

// Route::get('posts/index','PostsController@index')->middleware('LoginUserCheck');

//ログイン中のページ
// ログイン後最初の画面


Route::get('top',function(){return view('posts.index');})->middleware('auth');
Route::post('top',function(){return view('posts.index');})->middleware('auth');

Route::get('/top','PostsController@index');
Route::post('/top','PostsController@index');

Route::get('/top','PostsController@index')->middleware('sns');
Route::post('/top','PostsController@index')->middleware('sns');

Route::get('/profile','UsersController@profile');

Route::get('/search','UsersController@index');

Route::get('/follow-list','PostsController@index');
Route::get('/follower-list','PostsController@index');
