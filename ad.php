<?php
session_start();

// Check if we have an authenticated user
if (!isset($_SESSION["authenticatedUserAD"]))
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
<title>GAMES 'R' US - Admin</title>
<meta charset="utf-8" />
<link href="../iis8dectest/css/ad.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
<h1>Games R Us<br>
<font color="white">ADMIN</font></h1>


<div id="content">

<!--<img src="../iis/images/gta1.png" width="480" height="90" alt="consoles" title="consoles"/> <br><br><br><br><br>
<br>-->

<h2>ADMIN</h2><!--content-->
<p>Welcome Back</p>
    <?php echo $_SESSION["authenticatedUserAD"]?>
    <a href="logout.php">logout</a>


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

<p>Click the Customer link to add/edit/delete customers.</p>

<!--HEADER-->



</div> <!--content-->

<div id="navigation">
<h2>ADMIN</h2>


<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>INDEX</span></a></li>
   <li><a href='displayCustomer.php'><span>CUSTOMERS</span></a></li>
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