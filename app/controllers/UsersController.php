<?php

class UsersController extends BaseController {

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

	public function loginWithFacebook() {

    // get data from input
  

    // get fb service
    // 
    //return "utkarsh";
    $fb = OAuth::consumer( 'Facebook','http://localhost:8000/fb/');

    // check if code is valid
   // $code = "";
    // if code is provided get user data and sign in
    // if not ask for permission first
   
        // get fb authorization
        $url = $fb->getAuthorizationUri();

        // return to facebook login url
         return Redirect::to( (string)$url );


}
public function loginDone()
{


    $code = Input::get( 'code' );
    $fb = OAuth::consumer( 'Facebook','http://localhost:8000/fb/');


    // check if code is valid
    //$code = "";
    // if code is provided get user data and sign in
   

        // This was a callback request from facebook, get the token
        $token = $fb->requestAccessToken($code);

        // Send a request with it
        $result = json_decode( $fb->request( '/me' ), true );
        //$result1 = json_decode($fb->getUser());
        	$userId=Users::getUserId($result['id']);
        	if($userId)
        	{
        		Auth::loginUsingId($userId);
        		$firstname = Users::getFirstName($userId);
        		Session::put('first_name',$firstname);
        		$data = "Welcome ";
        		return Redirect::to('/dashboard')->with('message',$data." ".$firstname);
        	}
        	else{


        	$newUserData['first_name'] = $result['first_name'];
        	$newUserData['last_name'] = $result['last_name'];
        	$newUserData['email'] = $result['email'];
        	$newUserData['uid'] = $result['id'];
        	$newUserData['signup_type'] = 2;
        	//$newUserData['profile_image'] = "https://graph.facebook.com/"+$result['id']+"/picture?width=250&height=250";
        	Session::put('fb',$newUserData);
            return View::make('fbgoogle')->with('newUserData',$newUserData);

        }
        //$message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        //echo $message. "<br/>".$result['link']."<br>",$result['link']."<br>".$result['username'];

        //Var_dump
        //display whole array().
        //dd($result);

}

public function googleAuth()
{
     // get data from input
    $code = Input::get( 'code' );

    // get google service
    $googleService = OAuth::consumer( 'Google' ,'http://localhost:8000/google');


    $url = $googleService->getAuthorizationUri();

        // return to google login url
        return Redirect::to( (string)$url );
    // check if code is valid

    // if code is provided get user data and sign in
}

public function loginDoneGoogle()
{
    $code = Input::get( 'code' );
    $googleService = OAuth::consumer( 'Google' ,'http://localhost:8000/google');


     $token = $googleService->requestAccessToken( $code );

        // Send a request with it
        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );


        //Var_dump
        //display whole array().
        $userId=Users::getUserId($result['id']);
        	if($userId)
        	{
        		Auth::loginUsingId($userId);
        		$firstname = Users::getFirstName($userId);
        		Session::put('first_name',$firstname);
        		$data = "Welcome ";
        		return Redirect::to('/dashboard')->with('message',$data." ".$firstname);
        	}
        	else{


        	$newUserData['first_name'] = $result['given_name'];
        	$newUserData['last_name'] = $result['family_name'];
        	$newUserData['email'] = $result['email'];
        	$newUserData['uid'] = $result['id'];
        	$newUserData['signup_type'] = 3;
        	//$newUserData['profile_image'] = "https://graph.facebook.com/"+$result['id']+"/picture?width=250&height=250";
        	Session::put('fb',$newUserData);
            return View::make('fbgoogle')->with('newUserData',$newUserData);

        }
        
  

    }


public function obscura()
{
	//echo $event;
	return Redirect::to('/test');
	//$data = Users::find(1);
	//return $data->email;

	$data['firstname'] = "Bharat";
	$data['lastname'] = "Maan";
	$data['email']  = "bharat6dx@gmail.com";
	$data['level'] = 10;
	$data['college'] = "NIT Kurukshetra";
	if(Users::create($data))
	{
		return "Success";
	}
	else
	{
		return "Failed";
	}
}
public function dashboard()
{
	return View::make('dashboard');
}
 public function signup()
 {
 	return View::make('register');
 }

 public function postSignup()
 {
 	$validator=Validator::make($newUserData=Input::all(),Users::$rulesSignup);
 	if($validator->fails())
		{

			return Redirect::back()->withErrors($validator)->withInput(Input::except('password','email'));
		}
	else
	{
			
				$newUserData['password'] = Hash::make(Input::get('password'));
	  			Users::create($newUserData);
	  			return "user added";
	}
 }
 public function postfbgoogle()
 {
 	$validator=Validator::make($newUserData=Input::all(),Users::$rulesfbgoole);
 	if($validator->fails())
		{

			return Redirect::to('/fbgoogle')->withErrors($validator)->withInput();
		}
	else
	{
				if(Session::has('fb'))
				{
					$tempData = Session::get('fb');
					$newUserData['uid'] = $tempData['uid'];
					$newUserData['signup_type'] = $tempData['signup_type'];
					if(Users::create($newUserData))
					{
						Session::forget('fb');
						return Redirect::to('/login')->with('message','Registered succesfully');
					}
					else
					{
						return Redirect::to('/login')->with('message','Registration failed');
					}
					Session::forget('fb');
			}
	}
 }
 public function fbgoogle()
 {
 	return View::make('fbgoogle');
 }

 public function login()
 {
 	if(Auth::check())
		{
			
 	 		return Redirect::to("/dashboard")->with('message','You are all-ready logged in');
 		}
		return View::make('login');
 }

 public function postLogin()
{
	return Redirect::back();
	$remember=(Input::has('remember'))?true:false;
		$credentials=$this->getCerdentials();
		if(Auth::attempt($credentials,$remember))
			{
				Session::flash('success','Welcome user!');
				/*
				|$id is used to store the the unique 'user_id'
				|of the logged in user in session varible so thar
				|latter this can be used.
				|
				*/
				//$data=$this->users->get(Input::get('email'));
				$firstname = Users::getFirstName(Auth::id());
				Session::put('first_name',$firstname);
				$data = "Welcome ";
        		return Redirect::to('/home')->with('message',$data." ".$firstname);
			}
			
		else
			{
				return "failed";
				//return Redirect::to('/login')->with('failed',Lang::get('login.invalid_login'));
			}

}

public function getCerdentials()
	{
		return [
			"email"=>Input::get('email'),
			"password"=>Input::get('password'),
		];
	}

public function logout()
	{
		Auth::logout();
		Session::flush();
    	return Redirect::to("/login")->with('message','Successfully you are logged-out');
	}


 public function home()
 {
 	$userId = Auth::id();
 	//$userMaxLevel = Users::getLevel($userId);
 	//Session::put('userMaxLevel',$userMaxLevel);
 	return View::make('dashboard');
 	//return Redirect::to('/obscura');
 }
 public function start()
 {
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	return Redirect::to($presentLevelName[0]->levelName);

 }

 public function checkAnswer()
 {	

 	$presentLevel = Session::get('presentLevel');
    $userMaxLevel = Users::getUserMaxLevel(Auth::id());
 	$userAnswer = Input::get('answer');
 	$correctAnswer1 = Answer::getAnswer($presentLevel,'answer1');
 	$correctAnswer2 = Answer::getAnswer($presentLevel,'answer2');
 	if(($userAnswer == $correctAnswer1) || ($userAnswer == $correctAnswer2))
 	{
        if($userMaxLevel == $presentLevel){
        Users::updateLevel();
    }
        $presentLevel = $presentLevel + 1;
       // Session::put('presentLevel',$presentLevel);
 		$presentLevelName = Levels::getLevelName($presentLevel);
        return Redirect::to($presentLevelName[0]->levelName);
 	}
 	else
 	{
 		return Redirect::back()->with('messgae','Wrong Answer!');
 	}
 }

 public function level0()
 {
 	$userMaxLevel = Users::getUserMaxLevel(Auth::id());
    Session::put('presentLevel',0);
    $presentLevel = 0;
    $userMaxLevelName = Levels::getLevelName($userMaxLevel);
    if($userMaxLevel >= $presentLevel)
    {
        return View::make('level0');
    }
    else
    {
        return Redirect::to($userMaxLevelName[0]->levelName)->with('messgae','Please Complete This Level!');
    }

 }

  public function level1()
 {
	$userMaxLevel = Users::getUserMaxLevel(Auth::id());
    Session::put('presentLevel',1);
    $presentLevel = 1;
    $userMaxLevelName = Levels::getLevelName($userMaxLevel);
    if($userMaxLevel >= $presentLevel)
    {
        return View::make('level0');
    }
    else
    {
        return Redirect::to($userMaxLevelName[0]->levelName)->with('messgae','Please Complete This Level!');
    }
 }


  public function level2()
 {
	$userMaxLevel = Users::getUserMaxLevel(Auth::id());
    Session::put('presentLevel',2);
    $presentLevel = 2;
    $userMaxLevelName = Levels::getLevelName($userMaxLevel);
    if($userMaxLevel >= $presentLevel)
    {
        return View::make('level0');
    }
    else
    {
        return Redirect::to($userMaxLevelName[0]->levelName)->with('messgae','Please Complete This Level!');
    }
 }


  public function level3()
 {
    $userMaxLevel = Users::getUserMaxLevel(Auth::id());
    Session::put('presentLevel',3);
    $presentLevel = 3;
    $userMaxLevelName = Levels::getLevelName($userMaxLevel);
    if($userMaxLevel >= $presentLevel)
    {
        return View::make('level0');
    }
    else
    {
        return Redirect::to($userMaxLevelName[0]->levelName)->with('messgae','Please Complete This Level!');
    }
 }


  public function level4()
 {
    $userMaxLevel = Users::getUserMaxLevel(Auth::id());
    $presentLevel = Session::put('presentLevel',4);
    $presentLevelName = Levels::getLevelName($presentLevel);
    if($userMaxLevel >= $presentLevel)
    {
        return View::make('level0');
    }
    else
    {
        return Redirect::to($presentLevelName[0]->levelName)->with('messgae','Please Complete This Level!');
    }	
 }


  public function level5()
 {
	$levelName = Levels::getLevelName(5);
 	$level = 5;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level5');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }


  public function level6()
 {
	$levelName = Levels::getLevelName(6);
 	$level = 6;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level6');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }


  public function level7()
 {
	$levelName = Levels::getLevelName(7);
 	$level = 7;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level7');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}	
 }


  public function level8()
 {
	$levelName = Levels::getLevelName(8);
 	$level = 8;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level8');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level9()
 {
 	$levelName = Levels::getLevelName(9);
 	$level = 9;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level9');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level10()
 {
 	$levelName = Levels::getLevelName(10);
 	$level = 10;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level10');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level11()
 {
 	$levelName = Levels::getLevelName(11);
 	$level = 11;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level11');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level12()
 {
 	$levelName = Levels::getLevelName(12);
 	$level = 12;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level12');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level13()
 {
 	$levelName = Levels::getLevelName(13);
 	$level = 13;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level13');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level14()
 {
 	$levelName = Levels::getLevelName(14);
 	$level = 14;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level14');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level15()
 {
 	$levelName = Levels::getLevelName(15);
 	$level = 15;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level15');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level16()
 {
 	$levelName = Levels::getLevelName(15);
 	$level = 16;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level16');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level17()
 {
 	$levelName = Levels::getLevelName(17);
 	$level = 17;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level17');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level18()
 {
 	$levelName = Levels::getLevelName(18);
 	$level = 18;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level18');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level19()
 {
 	$levelName = Levels::getLevelName(19);
 	$level = 19;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level19');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level20()
 {
 	$levelName = Levels::getLevelName(20);
 	$level = 20;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level20');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }

 public function level21()
 {
 	$levelName = Levels::getLevelName(21);
 	$level = 21;
 	$presentLevel = Session::get('presentLevel');
 	$presentLevelName = Levels::getLevelName($presentLevel);
 	if($presentLevel >= $level)
 	{
 		return View::make('level21');
 	}
 	else
 	{
 		return Redirect::to($presentLevelName[0]->levelName);
 	}
 }
}
