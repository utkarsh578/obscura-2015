<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		//Redirect::to(URL::route('/') . "#login");
		//$url = URL::route('/obscura') . '#login';
		//return Redirect::to($url);
		//$url = URL::route('login') . '/#scrollLogin';
		//return $url;
		//return Redirect::to($url);
		return View::make('index');
	}
	public function dashboard()
	{
		//return "sdsds";
		return View::make('start');
	}
	public function leaderboard()
	{
		$lead = Users::leaderboard();
		//return $lead;
		return View::make('leaderboard')->with('lead',$lead);
	}
}
