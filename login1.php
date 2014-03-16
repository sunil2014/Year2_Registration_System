<?php
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>GAMES 'R' US - Login</title>
<meta charset="utf-8" />
<link href="../iis/css/index.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
<h1>Games 'R' Us</h1>

<div id="content">

<!--<img src="../iis/images/gta1.png" width="480" height="90" alt="consoles" title="consoles"/> <br><br><br><br><br>
<br>-->

<h2>Login</h2><!--HEADER-->
<?php

if ($username && $userid) {

echo "You are already logged in as <b>$username</b>. <a href='member.php'>Click here</a> to go to the member page.";

}
else{

	$form = "<form action='login.php' method='post'>
	<table>
	
	<tr>
	<td>Username:</td>
	<td><input type='text' name='user' /></td>	
	</tr>
	 
	<tr>
	<td>Password:</td>
	<td><input type='password' name='password' /></td>	
	</tr>
	
	<tr>
	<td></td>
	<td><input type='submit' name='loginbtn' value='Login' /></td>	
	</tr>
	
	<tr>
	<td><a href='register.php'>Register</a></td>
	<td><a href='forgotpass.php'>Forgot your password?</a></td>	
	</tr>
	
	</table>
	</form>";

	if ($_POST['loginbtn']){
	$user = $_POST['user'];
	$password = $_POST['password'];

	if ($user) {
	if ($password)	{
		require("connection.php");//conects to database
		
		$password = md5(md5("19Dvdnj".$password."jndfFf20"));//double md5 encryption / salt encryption
		
		$query = mysql_query("SELECT * FROM users WHERE username='$user'");
		$numrows = mysql_num_rows($query);
		if ($numrows ==1)	{
			$row = mysql_fetch_assoc($query);
			$dbid = $row['id'];
			$dbuser = $row['username'];
			$dbpass = $row['password'];
			$dbactive = $row['active'];
			
			if ($password != $dbpass)	{
				if ($dbactive == 1){
				
				//set session info
				$_SESSION['userid'] = $dbid;
				$_SESSION['username'] = $dbuser;
				
				echo "You have been logged in as <b>$dbuser</b>. <a href='member.php'>Click here</a> to go to the member page.";
				
				}
				else
					echo "You must activate your account to log in. $form";
			
			
			}
			else 
			echo "You did not enter the correct password. $form";
			
		}
		else
			echo "The username you entered was not found. $form";
		
		$query = mysql_query("");
		
		mysql_close();//closes connection to database
		
	}
	else 
		echo "You must enter your password. $form";
	
	}
	else
		echo "You must enter your username. $form";
	
	}
	else	
		echo $form;
		}
	?>

<h2>Login2</h2><!--HEADER-->
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