<?php
session_start();

// Check if we have an authenticated user
if (!isset($_SESSION["authenticatedUser"]))
//if not re-direct to login page
{
$_SESSION["message"] = "Please Login";
header("Location: login.php");
}
else
{ 
//If authenticated then display page contents
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>GAMES 'R' US - Members</title>
<meta charset="utf-8" />
<link href="../iis8dec/css/index.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
<h1>Games R Us</h1>



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

<!--HEADER-->

<p>Please feel free to browse for the latest games on all existing consoles</p>

</div> <!--content-->

<div id="navigation">
<h2>Index</h2>


<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>INDEX</span></a></li>
   <li><a href='game.php'><span>GAMES</span></a></li>
</ul>
</div>



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

<?php  
} 
?>