<?php

class FacebookLogin extends Controller {
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

        $message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        echo $message. "<br/>";

        //Var_dump
        //display whole array().
        dd($result);

    }
    // if not ask for per

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

        //$message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        //echo $message. "<br/>".$result['link']."<br>",$result['link']."<br>".$result['username'];

        //Var_dump
        //display whole array().
        dd($result);
        dd($result1);

}
}