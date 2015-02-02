@if(Session::has('message'))
{{Session::get('message')}}
@endif

<html>
<head>
<title></title>
</head>
<body>
<form method="post" action ="/checkAnswer">
<input type="text" name="answer">
<button type="submit" value = "submit">sumbmit
</button>
</form>
</body>
</html>