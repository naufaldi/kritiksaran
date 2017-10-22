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


Auth::routes();
Auth::routes();

Route::get('admin/kajur','KajurController@index');
Route::get('admin/test','KajurController@akes_admin');
Route::get('admin/home','AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');

// Route::post('admin-password/email','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.email');
// Route::get('admin-password/reset','												   Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

// Route::post('admin-password/reset','Admin\ResetPasswordController@reset')->name('admin.password/reset');
// Route::get('admin-password/reset/{token}',' Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');



Route::group(['middleware'=>'auth'],function(){
Route::get('/profile/{username}','ProfileController@profile');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('articles','ArticleController');
Route::post('articles/comments','ArticleController@comment');

		
});
