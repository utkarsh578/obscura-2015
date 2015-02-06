<!DOCTYPE html>
<html>
  <head>
<!-- Latest compiled and minified CSS -->
<script src='https://www.google.com/recaptcha/api.js'></script>
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
<script src='https://www.google.com/recaptcha/api.js'></script>
 <section class="container-fluid" id="inner-block">
   
    <div class="row" id="short-head">
        <a class="btn btn-default pull-right" id="login-link" href="/">
          Obscura
        </a>
        <a class="btn btn-default pull-right" id="register-link" href="/login">
          Login
        </a>
  </div>

      <div class="row" >
   
         <div class="col-md-4 col-md-offset-4 text-center col-xs-offset-1 col-xs-10 col-sm-8 col-sm-offset-2 obscura-form" id="register-form">
          <h3 class="obscura-form-header">
            Register
          </h3>
          @if($errors->has())
            @foreach($errors->all() as $error)
              <p>{{ $error }}<br>
            @endforeach
          @endif
            <div class="register-block" >
              <div class="social-login">
            <button class="btn btn-default login-fb" onclick="window.location.href='/facebook'"><i class="fa fa-facebook-square"></i><span>Register with Facebook</span></button>
                  <button class="btn btn-default login-tw" onclick="window.location.href='/googleAuth'"><i class="fa fa-google-plus-square"></i><span>Register with Google</span></button>
                <div class="text-center" id="or">OR</div>
              </div>
            <form method="post" action="/postSignup">
              <div class="input-wrapper custom-2">              
                <input class="form-control input-lg" type="text" placeholder="First Name" name="first_name" value="{{Input::old('first_name')}}"  required>        
              </div>
               <div class="input-wrapper custom-2">
                <input class="form-control input-lg" type="text" placeholder="Last Name" name="last_name" value="{{Input::old('last_name')}}" required>        
              </div>
              <div class="input-wrapper">
                <i class="fa fa-user"></i>               
                <input class="form-control input-lg" type="email" placeholder="Email" name="email" value="{{Input::old('email')}}"  required>        
              </div>
              <div class="input-wrapper">
                <i class="fa fa-phone"></i>               
                <input class="form-control input-lg" type="text" placeholder="Contacts" name="mobno" value="{{Input::old('mobno')}}" required>        
              </div>
              <div class="input-wrapper">
                <i class="fa fa-key"></i>
                <input class="form-control input-lg" type="password" placeholder="Password" name="password" required>
              </div>
               <div class="input-wrapper">
                <i class="fa fa-key"></i>
                <input class="form-control input-lg" type="password" placeholder="Confirm  Password" name="password_confirmation" required>
              </div>
              <div class="input-wrapper">
                {{Form::captcha()}}
              </div>
              <button class="btn btn-default btn-lg login" type="submit"> Register</button>
            </form>
          </div>
       

          <div class="obscura-form-footer">
            <h4><span>Already a member</span><a href="/login">Login Here</a>
            </h4>
          </div>
        </div>

      </div>
    </section>


  </body>
</html>