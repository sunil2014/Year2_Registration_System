<?php

//session start and get variable
session_start();
$user = $_SESSION['user'];

//connect
$connect = mysql_connect("localhost", "c3314283", "c3314283");
	mysql_select_db("c3314283"); 
	
	//query
	$get = mysql_query("SELECT * FROM admin WHERE username ='$user'");
	while ($row = mysql_fetch_assoc($get))//creates array
	{
	$admins = $row['admins'];
	}
	
	if ($admins==0)
	die("your not a admin");
	
?>