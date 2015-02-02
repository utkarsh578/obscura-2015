<!DOCTYPE html>
<html>
<body>
@if($errors->has())
@foreach($errors->all() as $error)
            <p>{{ $error }}<br>
        @endforeach
  @endif
<form method="POST" action="/start">
<input type="submit" value="Start">
</form> 

</body>
</html>
