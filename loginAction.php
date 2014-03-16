<?php
include "connection.php";
?>
<?php
//
session_start();
$username   =    mysql_real_escape_string($_POST['username']);
$password    =    mysql_real_escape_string($_POST['password']);

// (3) Create query of the form below to search the user table
$query = "SELECT * FROM Customer WHERE Username='$username' AND Password='$password'";
$admin = "SELECT * FROM admin WHERE username='$username' AND passcode='$password'";
// (3) Run query through connection
$result = mysql_query ($query);
$adminresult = mysql_query ($admin);
// (4) Check result of query using code below

// if rows found set authenticated user to the user name entered 

if (mysql_num_rows($adminresult) > 0) { 
$_SESSION["authenticatedUserAD"] = $username;
$_SESSION["id"] = $userid;
// Relocate to the logged-in page
header("Location: ad.php");
} 

else if (mysql_num_rows($result) > 0) { 
$_SESSION["authenticatedUser"] = $username;
$_SESSION["id"] = $userid;
// Relocate to the logged-in page
header("Location: loggedon.php");
} 
else
// login failed redirect back to login page with error message
{
$_SESSION["message"] = "Could not connect as $username " ;
header("Location: login.php");
}
?>