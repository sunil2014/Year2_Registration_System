<!DOCTYPE html>
<html lang="en">
<head>
<title>GAMES 'R' US - Index</title>
<meta charset="utf-8" />
<link href="../iis8dectest/css/index.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
<h1>Games R Us<br>
<font color="white">INDEX</font></h1>



<div id="content">

<!--<img src="../iis/images/gta1.png" width="480" height="90" alt="consoles" title="consoles"/> <br><br><br><br><br>
<br>-->

<h2>Welcome</h2><!--content-->
<?php
$hour = date("G");
    if ($hour >= 0 && $hour <= 11) {
        echo "Good morning";
	} else if ($hour >= 12 && $hour <= 17) {
        echo "Good afternoon";
    } else {
	   	echo "Good evening";
	}
?>

the date is

<?php 
date_default_timezone_set('Europe/London');

echo date('d/m/Y - H:ia');

?>

<p>Please feel free to browse for the latest games on all existing consoles</p>

<h2>Contact</h2><!--HEADER-->

<h3>Email</h3>
<p>Address@leedsmet.ac.uk</p>
<h3>Telephone</h3>
<p>Landline: 0113 2781334</p>
<p>Mobile: 07832121283</p>
<h3>Postal</h3>
<p>Headingley Campus, Leeds, LS6 3GZ</p>

</div> <!--content-->

<div id="navigation">
<h2>Index</h2>


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


<!--
<ul>
<li>

<li><a href="addCustomer.php">addcustomer</a></li>
<br><br><li><a href="index.php">Index</a></li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="acknowledgements.php">Acknowledgements</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="game.php">Game-final</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="displayCustomer.php">Customers</a></li>
</ul>-->
</div><!--nav-->

<div id="footer">
<p><img class="noborder" src="../iis/images/htmlvalid.png" width="80" height="19" alt="htmlvalid" title="valid html5" /> 
<img class="noborder" src="../iis/images/cssvalid.png" width="80" height="19" alt="cssvalid" title="valid css" /> 
&copy; Games 'R' Us 

<a href='acknowledgements.php'><span>ACKNOWLEDGEMENTS</span></a>
</div><!--footer-->



</div> <!--container-->

</body>

</html>
