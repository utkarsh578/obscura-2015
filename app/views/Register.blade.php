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
<!--     <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Obscura</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="#first-block">Rules</a></li>
              <li><a href="#">Forum</a></li>
              <li><a href="#second-block">Contact US</a></li>
             <li><a href="login.html">Login</a> </li>


            </ul>

          </div><!-- /.navbar-collapse -->
  <!--       </div>/.container-fluid
      </nav>
</header> -->
   -->
 <section class="container-fluid" id="inner-block">
      <div class="row" >
   
         <div class="col-md-4 col-md-offset-4 text-center col-xs-offset-1 col-xs-10 col-sm-8 col-sm-offset-2 obscura-form" id="register-form">
          <h3 class="obscura-form-header">
            Register
          </h3>
            <div class="register-block" >
            <form method="post" action="/postSignup">
              <div class="input-wrapper custom-2">              
                <input class="form-control input-lg" type="text" placeholder="First Name" name="first_name">        
              </div>
               <div class="input-wrapper custom-2">
                <input class="form-control input-lg" type="text" placeholder="Last Name" name="last_name">        
              </div>
              <div class="input-wrapper">
                <i class="fa fa-user"></i>               
                <input class="form-control input-lg" type="text" placeholder="UserName" name="username">        
              </div>
              <div class="input-wrapper">
                <i class="fa fa-user"></i>               
                <input class="form-control input-lg" type="email" placeholder="Email" name="email">        
              </div>
              <div class="input-wrapper">
                <i class="fa fa-key"></i>
                <input class="form-control input-lg" type="password" placeholder="Password" name="password">
              </div>
               <div class="input-wrapper">
                <i class="fa fa-key"></i>
                <input class="form-control input-lg" type="password" placeholder="Confirm Password" >
              </div>
              <button class="btn btn-default btn-lg login" type="submit"> Register</button>
              <button class="btn btn-default btn-lg forget"></button>
            </form>
          </div>
       

          <div class="obscura-form-footer">
            <h4><span>Already a member</span><a href="login.html">Login Here</a>
            </h4>
          </div>
        </div>

      </div>
    </section>

    <div id="short-head">
        <a class="btn btn-default " id="login-link" href="#scrollLogin">
          Login
        </a>
        <a class="btn btn-default" id="register-link" href="#scrollRegister">
          Register
        </a>
  </div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>     
 <script type="text/javascript">
 	$( window ).scroll(function(){
 		// console.log($( window ).scrollTop());
 		 if($( window ).scrollTop() >= $( '#first-block' ).position().top)
 			 $('header').show();
 			else
 			$('header').hide();
 				
 	});
function showLogin(){
	$('#login-form').show();
		$('#register-form').hide();	

}
function showRegister(){
		$('#register-form').show();	
		$('#login-form').hide();

}
 	$(window).on('hashchange', function() {
	var val =location.hash;
	if(val=='#login'){
		showLogin();
	}
	else if(val=="#register"){
		showRegister();
	}
	else if(val=="#scrollLogin")
	{
		showLogin();
				$( window ).scrollTop($( '#inner-block' ).position().top);
	}
	else if(val=="#scrollRegister")
	{
		showRegister();
				$( window ).scrollTop($( '#inner-block' ).position().top);
	}
});
 </script>
  </body>
</html>