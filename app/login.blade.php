<!DOCTYPE html>
<html>
<body>
@if($errors->has())
@foreach($errors->all() as $error)
            <p>{{ $error }}<br>
        @endforeach
  @endif
<form method="POST" action="/postLogin">
Email<input type="text" name="email" required>
<br>
Password<input type="password" name="password" required>
<br>
<input type="submit" value="Submit">
<label>
                <input type="checkbox" name="remember" >
                Remember me </label>
</form> 

</body>
</html>
