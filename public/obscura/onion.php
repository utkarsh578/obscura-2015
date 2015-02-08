<?php
//session_start();
$flag=false;
if(isset($_POST['answer'])&&!empty($_POST['answer']))
{if($_POST['answer']=="indianparties"|| $_POST['answer']=="indianpoliticalparties"|| $_POST['answer']=="indianpoliticalparty")
{
header("location:linki.html");
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
<img src="lvlcon.jpg" id="cent">
<div id="answerblock">
<?php if ($flag) {echo "wrong answer";}?>
<form action="onion.php" method="POST">
<input type="text" name="answer">
<input type="submit" name="submit" value="submit">
</form></div>
</body>
</html>