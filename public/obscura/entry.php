<?php
//session_start();
$flag=false;
if(isset($_POST['answer'])&&!empty($_POST['answer']))
{if($_POST['answer']=="retarded"|| $_POST['answer']=="Retarded"|| $_POST['answer']=="RETARDED")
{
header("location:thecountdown.html");
}
else
$flag=true;
}
?>
<html>
<link rel="stylesheet" type="text/css" href="stylesheet1.css">
<script type="text/javascript" src="jquery.js"> </script>
<script type="text/javascript" src="jquery2.js"> </script>
<body>
<img src="bl.jpg" id="cent">
<div id="answerblock">
<?php if ($flag) {echo "wrong answer";}?>
<form action="entry.php" method="POST">
<input type="text" name="answer">
<input type="submit" name="submit" value="submit">
</form></div>
</body>
</html>