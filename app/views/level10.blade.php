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
          level 10
        </a>
        <br>
        <a class="btn btn-default pull-right" id="register-link" href="/signup">
          @if(Session::has('first_name'))
          {{Session::get('first_name')}}
          @endif
        </a>
  </div>
      <div class="row" >
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 text-center obscura-form" id="login-form">
          <h3 class="obscura-form-header">
            Level 0
          </h3>
              
              <img src="obscura1.jpg" align="center" height="700" width="700"><br>
             <form method="post" action="/answer"> 
                 <input type="text" name="answer" placeholder="Answer">
             </form>

		              

          
        </div>
       

      </div>
    </section> 

  </body>
</html>