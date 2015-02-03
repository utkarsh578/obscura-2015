<!DOCTYPE html>
<html>
  <head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/header.css">

<link rel="stylesheet" href="css/home.css">

<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200|Londrina+Outline|Flamenco:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Obscura</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#rules">Rules</a></li>
              <li><a href="#">Forum</a></li>
              <li><a href="#contact">Contact US</a></li>
              <li><a href="/login">Login</a> <span>|</span><a href="/signup">Register</a></li>

            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    
    <div class="container-fluid" id="welcome-block">
      <div class="row">
        <a class="btn btn-default pull-right" id="login-link" href="#scrollLogin">
     	    Login
        </a>
        <a class="btn btn-default pull-right" id="register-link" href="#scrollRegister">
     	    Register
        </a>
      </div>
     	<h1 class="text-center">
        	Obscura
      </h1>
      <div class="row" >
        <div class="col-md-12 text-center about">
          Online Cryptic Hunt
	      </div>
      </div>
    </div>

    <section class="container-fluid blocks" id="brief-block"> 
      <div class="row" >
        <div class="col-md-10 col-sm-12 col-md-offset-1">
          <div class="container-fluid blocks" >
            <div class="row" >
              <div class="col-md-4 col-sm-4 text-center">
	              <div class="glyphicon glyphicon-tasks" aria-hidden="true"></div>
	              <div> 24 Levels</div>
              </div>
              <div class="col-md-4 col-sm-4 text-center">
              	<div class="glyphicon glyphicon-calendar" aria-hidden="true"></div>
              	<div>10 Days</div>
              </div>
              <div class="col-md-4 col-sm-4 text-center">
              	<div class="glyphicon glyphicon-usd" aria-hidden="true"></div>
              	<div>Rs.10k+ Goodies</div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="container-fluid blocks" id="about">
      <div class="row" >
      	<div class="text-center col-md-12" id="about-div">        
          <h1 class=" block-head">
          	About Obscura
	       	</h1>
	       	<p>
        		Lorem ipsum dolor sit amet, consectetur adipiscing elit, orem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit, orem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
          </p>
		    </div>
	     </div>
    </section>


    <section class="container-fluid blocks" id="rules">
      <h1 class="text-center block-head">
        Rules
	   	</h1>
      <div class="row" >
    		<ul>
    
          <li>All the answers are in lowercase. No  UPPERCASE shall be TOLERATED!</li>
          <li>Nothing is obvious at Obscura. So open the flaps  and think out of the box.</li>
          <li>But we've sprinkled sufficient clues every here  and there. So keep a close check on them.(PSST.. Source code might help, but this is just the beginning!)
         </li><li>There is no spacing in tha answer.
         </li><li>We can help you, if you are polite enough to ask  for it. Don't go around pestering us for hints.
         </li><li>Googlebaba knows it all.
         </li><li>We are cruel people hints can be ANYWHERE.
         </li><li>Begin to love surfing. Oh, did we forget to tell  we love Wikipedia and tineye.com a lot?
         </li><li>Finding the answer is not the final solution.
          </li>
    		</ul>		
	   </div>
  </section>


  <section class="container-fluid blocks" id="contact">
    <h1 class="text-center block-head">
     	Contact Us
    </h1>
    <div class="row" >
      <div class="col-md-4 col-md-offset-2 col-sm-6 text-center">
  	     <div class="glyphicon glyphicon-phone-alt" aria-hidden="true"></div>
         <div>+91 -99962662277</div>
      </div>
      <div class="col-md-4 col-sm-6 text-center">
        <div class="glyphicon glyphicon-envelope" aria-hidden="true"></div>
        <div>croppedstreets@gmail.com</div>

      </div>	
    </div>
  </section>



   <footer>
       <ul class="nav navbar-nav">
            <li><a href="#about">About Obscura</a></li>
            <li><a href="#">Team Obscura</a></li>
            <li><a href="http://www.conflu.org">Confluence'15</a></li>
            <li><a href="http://#">NIT Kurukshetra</a></li>
            
          </ul>
    </footer>

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
  $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - 80
    }, 500);
    return false;
});
    </script>
  </body>
</html>