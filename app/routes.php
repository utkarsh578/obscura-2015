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
Route::post('/test','HomeController@test');

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
Route::get('/level9','UsersController@level9');
Route::get('/level10','UsersController@level10');
Route::get('/level11','UsersController@level11');
Route::get('/level12','UsersController@level12');
Route::get('/level13','UsersController@level13');
Route::get('/level14','UsersController@level14');
Route::get('/level15','UsersController@level15');
Route::get('/level16','UsersController@level16');
Route::get('/level17','UsersController@level17');
Route::get('/level18','UsersController@level18');
Route::get('/level19','UsersController@level19');
Route::get('/level19_1','UsersController@level19_1');
Route::get('/level20','UsersController@level20');
Route::get('/level21','UsersController@level21');
Route::get('/level22','UsersController@level22');
Route::get('/level23','UsersController@level23');
Route::get('/level24','UsersController@level24');
Route::get('/level25','UsersController@level25');
Route::get('/level26','UsersController@level26');
Route::get('/level27','UsersController@level27');
Route::get('/level28','UsersController@level28');
Route::get('/level29','UsersController@level29');
Route::get('/level30','UsersController@level30');
Route::get('/level31','UsersController@level31');

Route::get('/level5th','UsersController@level5th');
Route::get('/logout','UsersController@logout');
Route::get('/leaderboard','HomeController@leaderboard');
//Route::get('/home','UsersController@home');

Route::post('/checkAnswer','UsersController@checkAnswer');
});