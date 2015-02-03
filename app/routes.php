<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/googleAuth','UsersController@googleAuth');
Route::get('/google','UsersController@loginDoneGoogle');
Route::get('/fb','UsersController@loginDone');
Route::get('/facebook','UsersController@loginWithFacebook');


	
Route::get('/obscura','UsersController@obscura');

Route::get('/signup','UsersController@signup');
Route::post('/postSignup','UsersController@postSignup');
Route::get('/login','UsersController@login');
Route::post('/postLogin','UsersController@postLogin');
Route::get('/','HomeController@home');

Route::post('/postfbgoogle','UsersController@postfbgoogle');
Route::get('/fbgoogle','UsersController@fbgoogle');
Route::group(array('before' => "auth"), function() {

Route::get('/dashboard','HomeController@dashboard');
Route::post('/start','UsersController@start');
Route::get('/level0','UsersController@level0');
Route::get('/level1','UsersController@level1');
Route::get('/level2','UsersController@level2');
Route::get('/level3','UsersController@level3');
Route::get('/level4','UsersController@level4');
Route::get('/level5','UsersController@level5');
Route::get('/level6','UsersController@level6');
Route::get('/level7','UsersController@level7');
Route::get('/level8','UsersController@level8');

Route::get('/logout','UsersController@logout');
//Route::get('/home','UsersController@home');

Route::post('/checkAnswer','UsersController@checkAnswer');
});