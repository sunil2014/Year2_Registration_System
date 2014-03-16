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
<title>GAMES 'R' US - GAMES</title>
<meta charset="utf-8" />
<link href="../iis8dectest/css/game.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
<h1>Games R Us<br>
<font color="white">GAMES</font></h1>

<div id="content">

<!--<img src="../iis/images/gta1.png" width="480" height="90" alt="consoles" title="consoles"/> <br><br><br><br><br>
<br>-->

<h2>Genre</h2>


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

<p>Please feel free to browse for the latest games on all existing consoles</p>

<div id ="genre">
<h4>Game Genre</h4>
<ul id ="dbmenu">
<li id="link"><i><a href="game.php">All<br><br></a></i></li>
<li id="link"><i><a href="game.php?letter=A">Adventure<br><br></a></i></li>
<li id="link"><i><a href="game.php?letter=S">Shooter<br><br></a></i></li>
<li id="link"><i><a href="game.php?letter=F">Fighting<br><br></a></i></li>
<li id="link"><i><a href="game.php?letter=D">Driving<br><br></a></i></li>
</ul>
<br>
</div>



<?php 
//Put all the connection details in the connection.php file

include

"connection.php";
//Get the film type submitted by the form

$initialLetter

= $_GET["letter"]; //Remember games_menu holds the innitial letter links for the genre to be selcted by the user!
// Query to select records chosen by menu

$query

= "SELECT * FROM games WHERE genre LIKE '$initialLetter%' ";
print

"<p>For debugging purposes! - $query </p>"; // Remember to run this command line in MySQL
// execute query

$result

= mysql_query($query) or die ("Error in query");
// see if any rows were returned

if

(mysql_num_rows($result)>0) {
//If so, print the table headers
print "<table border=1>\n<tr>" .
"<th>id</th>" .
"<th>title</th>" .
"<th>genre</th>" .
"<th>rating</th>" .
"<th>plattform</th>" .
"<th>image</th></tr>";
//Use a while loop to display each row
while ($row = mysql_fetch_array($result)) {
print "<tr>";
print "<td>".$row["id"]."</td>";
print "<td>".$row["title"]."</td>";
print "<td>".$row["genre"]."</td>";
print "<td>".$row["rating"]."</td>";
print "<td>".$row["plattform"]."</td>";
print "<td>".$row["image"]."</td>";
//this line creates a image link to an image in the images directory
//print "<td><img src=./images/database/controller.gif ".$row["movies"]." /><td>";
print "</tr>";
}

//Finish the while loop
print "</table>"; //Finsh the table
}

//Finish 'if rows found'
else

{
// print status message
print "<p>No rows found!<p>";
}
?>


</div> <!--content-->

<div id="navigation">
<h2>Games</h2>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>INDEX</span></a></li>
   <li><a href='loggedon.php'><span>MEMBER</span></a></li>
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

