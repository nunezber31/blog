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

// Route::get('/about', function () {
// 	return view('pages.about');
// });

// Route::get('/hello', function () {
// 	return '<h1>Hello World<h1>';
// });

// Route::get('/users/{id}', function($id) {
// 	return 'This is user '.$id;
// });

// Route::get('/users/{id}/{name}', function($id,$name) {
// 	return 'This is user '.$name.' with an id of '.$id;
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');


Auth::routes();

// Route::group(['middleware'=>'auth'], function(){
// 	Route::get('/', 'DashboardController@index')->name('dashboard');
// 	Route::get('/profile', 'UserController@profile')->name('profile');

// 	Route::resource('blogs', 'BlogController');

// 	Route::group(['prefix'=>'api'], function(){
// 		Route::get('/all-blogs', 'BlogController@all');
// 		Route::get('/blogs/{id}', 'BlogController@getBlog');
// 	});
// });

Route::get('sample', function(){
	return view('sample');
});

Route::group(['prefix'=>'admin'], function(){
	Route::get('/index', function(){
		return 'admin index';
	});
	Route::get('/login', function(){
		return 'ADMIN LOGIN';
	});
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
