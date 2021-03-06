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
        <div class="dropdown">
  <button id="dLabel" type="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:none;color:white;margin-left:15px;margin-top: 15px ;width:100px">
    Level 0
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="background:none;color:white; width:100px; margin-left:15px">

   <li role="presentation">Level 0</li>
   <li role="presentation">Level 1</li>
   <li role="presentation">Level 2</li>
   <li role="presentation">Level 3</li>

  </ul>
</div>
        <br>
      </div>
      <div class="row" >
        <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-3 col-xs-12" id="login-form">
          <h3 class="obscura-form-header" align="center">
            Level 0
          </h3>
      </div>  
      </div>    
          <!--<img src="obscura1.jpg" align="center" height="700" width="700"><br>-->
          <form method="post" action="/checkAnswer"> 
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-3 col-xs-12">
              <img src="obscura1.jpg" align="center" class="col-md-12 col-sm-12 col-xs-12">
            </div>
            </div>
              <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-3 col-xs-12" style="background:#fff;margin-top:10px; padding:10px; opacity:0.8">
                @if(Session::has('message'))
                {{"<h5>"}}
                {{Session::get('message')}}
                {{"</h5>"}}
                @endif
                <input type="text" name="answer" placeholder="Answer" class="col-md-8">
                <input type="hidden" value="0" name="presentLevel">
                <input type="submit" value="Submit" class="btn-primary col-md-2 col-md-offset-2">
             </div>
          </form>  

  </section> 
   <marquee><p class="text-primary">{{Ticker::getTicker()}}</p></marquee>  

  </body>
  <script type="text/javascript" src="js/jquery.js"></script>

  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</html>