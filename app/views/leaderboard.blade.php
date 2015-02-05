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
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="background:none;color:white; width:100px; margin-left:15px;margin-top:-25px">

        <li role="presentation" class="text-center"><a class="btn btn-default pull-right" href="/logout">Logout</a></li>

      </ul>
    </div>
        <div class="dropdown pull-right" style="margin-right:10px">
      <button class="btn btn-default" id="dLabel" type="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:none;color:white;margin-left:15px;margin-top: 15px ;width:100px">
        Level 1
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="background:black;color:white; width:100px; margin-left:15px; height:300px; overflow-y: scroll; opacity: 0.8">

        <li role="presentation" class="text-center"><a style="color:grey" href="/level0">Level 0</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level1">Level 1</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level2">Level 2</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level3">Level 3</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level4">Level 4</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level5">Level 5</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level6">Level 6</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level7">Level 7</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level8">Level 8</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level9">Level 9</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level10">Level 10</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level11">Level 11</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level12">Level 12</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level13">Level 13</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level14">Level 14</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level15">Level 15</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level16">Level 16</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level17">Level 17</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level28">Level 18</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level19">Level 19</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level20">Level 20</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level21">Level 21</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level22">Level 22</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level23">Level 23</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level24">Level 24</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level25">Level 25</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level26">Level 26</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level27">Level 27</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level28">Level 28</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level29">Level 29</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level30">Level 30</a></li>
        <li role="presentation" class="text-center"><a style="color:grey" href="/level31">Level 31</a></li>


      </ul>
    </div>
    <div>
    <a class="btn btn-default pull-right" id="forum-link" href="https://www.facebook.com/Conflu/app_202980683107053" target="_blank">
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