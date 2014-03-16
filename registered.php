

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GAMES 'R' US - Registered</title>
		<meta charset="utf-8" />
		<link href="../iis8dectest/css/register.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
	<div id="container">
<h1>Games R Us<br>
<font color="white">REGISTERERED</font></h1>


			<div id="content">

				<!--<img src="../iis/images/gta1.png" width="480" height="90" alt="consoles" title="consoles"/> <br><br><br><br><br>
				<br>-->

				<h2>Registered</h2>
				
<?php
//STEP 1 Connect To Database

$connection = mysql_connect("localhost","c3314283","c3314283");

// (2) Select your  database id
mysql_select_db("c3314283", $connection);

//STEP 2 Declare Variables

$Username = $_POST['username'];
$Email = $_POST['email'];
$Email1 = "@";
$Email_Check = strpos($Email,$Email1);
$Password = $_POST['password'];
$Re_Password = $_POST['re-password'];
$Birth = $_POST['birth'];

//STEP 3 Check To See If All Information Is Correct

if($Username == "")
{
die("Opps! You don't enter a username!");
}

if($Password == "" || $Re_Password == "")
{
die("Opps! You didn't enter one of your passwords!");
}

if($Birth == "")
{
die("Opps! You never entered in your birth year!");
}

if($Password != $Re_Password)
{
die("Oops! Your passwords don't match! Try again.");
}

if($Email_Check === false)
{
die("Opps! That's not an email!");
}
//thank u bit

if($Name == $Database_Name && $Pass == $Database_Pass)
{
// If The User Makes It Here Then That Means He Logged In Successfully
echo "Thank You For Registering click here to login" . $_SESSION['username'] . "!";
}


//STEP 4 Insert Information Into MySQL Database

if(!mysql_query("INSERT INTO admin (email, username, passcode, birth)
VALUES ('$Email', '$Username', '$Password', '$Birth')"))
{
die(".)");
}

?>

<p><li><a href="login.php">Login</a></li></p>



				<h2>Register</h2>

			</div>
			<!--content-->

			<div id="navigation">
				<h2>Register</h2>
						<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>INDEX</span></a></li>
   <li><a href='aboutus.php'><span>ABOUT US</span></a></li>
   <li><a href='loggedon.php'><span>MEMBER</span></a></li>
   <li><a href='ad.php'><span>ADMIN</span></a></li>
   <li><a href='login.php'><span>LOGIN</span></a></li>
   <li><a href='register.php'><span>REGISTER</span></a></li>
</ul>
</div>
			</div><!--nav-->

			<div id="footer">
				<p><img class="noborder" src="../iis/images/htmlvalid.png" width="80" height="19" alt="htmlvalid" title="valid html5" />
					<img class="noborder" src="../iis/images/cssvalid.png" width="80" height="19" alt="cssvalid" title="valid css" />
					&copy; Games 'R' Us

			</div><!--footer-->

		</div>
		<!--container-->

	</body>

</html>