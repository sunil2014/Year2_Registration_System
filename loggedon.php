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
<link href="../iis8dectest/css/loggedon.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
<h1>Games R Us<br>
<font color="white">MEMBER - AREA</font></h1>


<div id="content">

<!--<img src="../iis/images/gta1.png" width="480" height="90" alt="consoles" title="consoles"/> <br><br><br><br><br>
<br>-->

<h2>MEMBERS</h2><!--content-->
<p>Welcome Back</p>
    <?php echo $_SESSION["authenticatedUser"]?>
    <a href="logout.php">logout</a>


<h2>MEMBERS</h2><!--HEADER-->
</div> <!--content-->

<div id="navigation">


<h2>members</h2>
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

</div><!--footer-->



</div> <!--container-->

</body>

</html>
<?php  
} 
?>
