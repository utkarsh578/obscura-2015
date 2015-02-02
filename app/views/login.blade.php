<!DOCTYPE html>
<html>
  <head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<link rel="stylesheet" href="css/header.css">

<link rel="stylesheet" href="css/footer.css">

<link rel="stylesheet" href="css/loginRegister.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200|Londrina+Outline|Flamenco:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
  

 <section class="container-fluid" id="inner-block">
      <div class="row" id="short-head">
        <a class="btn btn-default pull-right" id="login-link" href="/">
          Obscura 
        </a>
        <a class="btn btn-default pull-right" id="register-link" href="/signup">
          Register
        </a>
  </div>
      <div class="row" >
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 text-center obscura-form" id="login-form">
          <h3 class="obscura-form-header">
            Login To Obscura
          </h3>
          
            @if(Session::has('message'))
            {{'<h5 class='.'"obscura-form-header"'.">"}}
			{{Session::get('message')}}
			{{"</h5>"}}
			@endif
			
         <div id="login-block">
       
		            <div class="social-login">
		             
		              <button class="btn btn-default login-fb"><i class="fa fa-facebook-square"><a href="/facebook"></i><span>Login with Facebook</span></a></button>
		              <button class="btn btn-default login-tw"><i class="fa fa-google-plus-square"></i><span><a href="/googleAuth">Login with Google</a> </span></button>
		            <div class="text-center" id="or">OR</div>
		              <form method="post" action="/postLogin">
			              <div class="input-wrapper">
			                <i class="fa fa-user"></i>               
			                <input class="form-control input-lg" type="email" placeholder="Email" id="username" name="email" required> </input>       
			              </div>
			              <div class="input-wrapper">
			                <i class="fa fa-key"></i>
			                <input class="form-control input-lg" type="password" placeholder="Password" id="password" name="password" required></input>
			              </div>
			              <button class="btn btn-default btn-lg login" id="user-submit" type="submit">Login</button>
			              <button class="btn btn-default btn-lg forget">Forgot Password</button>
			            </form>
	        		</div>
	      
        </div>
       

          <div class="obscura-form-footer">
            <h4><span>Not a Member yet </span><a href="/signup">Register Now</a>
            </h4>
          </div>
        </div>
       

      </div>
    </section> 

  </body>
</html>