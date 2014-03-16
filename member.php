<?php
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>GAMES 'R' US - members</title>
<meta charset="utf-8" />
<link href="../iis/css/index.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
<h1>Games 'R' Us</h1>

<div id="content">

<!--<img src="../iis/images/gta1.png" width="480" height="90" alt="consoles" title="consoles"/> <br><br><br><br><br>
<br>-->

<h2>member</h2><!--HEADER-->
	<?php

	if ($username && $userid)	{
	echo "Welcome <b>$username</b>, <a href='logout.php'>logout</a>";
	}
	else 
		echo "Please login to access this page. <a href='login.php'>login here</a>";
	
?>

<h2>member2</h2><!--HEADER-->
</div> <!--content-->

<div id="navigation">
<h2>Login</h2>
<ul>
<li><a href="index.php">Index</a></li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="acknowledgements.php">Acknowledgements</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="gameindex.php">Games</a></li>
<li><a href="game.php">Game-final</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</div><!--nav-->

<div id="footer">
<p><img class="noborder" src="../iis/images/htmlvalid.png" width="80" height="19" alt="htmlvalid" title="valid html5" /> 
<img class="noborder" src="../iis/images/cssvalid.png" width="80" height="19" alt="cssvalid" title="valid css" /> 
&copy; Games 'R' Us 

</div><!--footer-->



</div> <!--container-->

</body>

</html>