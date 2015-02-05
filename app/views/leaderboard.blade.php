<!DOCTYPE html>
<html>
<head>
<title>Obscura 2.0</title>
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
        <a class="btn btn-default pull-left" id="login-link" href="/">
          Obscura
        </a>
    <div class="dropdown pull-right" style="margin-right:10px">
      <button class="btn btn-default" id="dLabel" type="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:none;color:white;margin-left:15px;margin-top: 15px ;width:100px">
        {{Users::getFirstName(Auth::id())}}
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="background:none;color:white; width:100px; margin-left:15px">

        <li role="presentation" class="text-center">Logout</li>

      </ul>
    </div>
        <div class="dropdown pull-right" style="margin-right:10px">
      <button class="btn btn-default" id="dLabel" type="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:none;color:white;margin-left:15px;margin-top: 15px ;width:100px">
        Level 1
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="background:none;;color:white; width:100px; margin-left:15px">

        <li role="presentation" class="text-center">Level 0</li>
        <li role="presentation" class="text-center">Level 1</li>
        <li role="presentation" class="text-center">Level 2</li>
        <li role="presentation" class="text-center">Level 3</li>

      </ul>
    </div>
    <div>
    <a class="btn btn-default pull-right" id="forum-link" href="https://www.facebook.com/Conflu/app_202980683107053">
          Forum
        </a>
      </div>
      <div>
    <a class="btn btn-default pull-right" id="leaderboard" href="#">
          Leaderboard
        </a>
        <br>
      </div>
      </div>
      <div class="row" >
        <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-3 col-xs-12" id="login-form">
          <h3 class="obscura-form-header" align="center">
            Leaderboard
          </h3>
      </div>  
      </div>    
          <!--<img src="obscura1.jpg" align="center" height="700" width="700"><br>-->
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-3 col-xs-12" style="background:#000; opacity: 0.6; color:#fff; font-size:20px">
            <table style="width:100%">
              <tr>
                <th>Rank</th>
                <th>Name</th> 
                <th>Level</th>
              </tr>
              <?php $i=0;?>
            @foreach($lead as $user)
            <tr>
              <td>{{$i++}}</td>
              <td style="margin-left:20%">{{$user->first_name}}</td>
              <td>{{$user->level}}</td>
            </tr>
            @endforeach
            </table>
            </div>
            </div>
              
  </section> 
 
  </body>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="https://apis.google.com/js/platform.js"></script>

  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</html>