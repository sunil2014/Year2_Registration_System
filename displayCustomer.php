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

<html>
<head>
<title>Adminministration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
</body>
<h1>Administration</h1>
<?php
//Put all the connection details in the connection.php file 
include "connection.php"; 

// Query to select records chosen by menu 
$query = "SELECT * FROM Customer ORDER BY CUSTOMERID";  
     
// execute query  
$result = mysql_query($query) or die ("Error in query");  

print "<a href=addCustomer.php>ADD CUSTOMER</a></td>";    
// see if any rows were returned  
if (mysql_num_rows($result)>0) {  
   //If so, print the table headers 
   print "<table border=1>\n<tr>" .  
              "<th>Customer ID</th>" .  
              "<th>First Name (s)</th>" .  
              "<th>Surname</th>" .  
              "<th>Username</th>" .
              "<th>Email</th>" .  
              "<th>Password</th>" .     
              "<th>Image</th>".
		      "<th>Ammend/Delete</th></tr>";  

   //Use a while loop to display each row 
    while ($row = mysql_fetch_array($result)) { 
        print "<tr>";  
        print "<td>".$row["CustomerID"]."</td>";
        print "<td>".$row["Firstnames"]."</td>";
        print "<td>".$row["Surname"]."</td>";
        print "<td>".$row["Username"]."</td>";
		print "<td>".$row["Email"]."</td>";
		print "<td>".$row["Password"]."</td>";
    //this line creates a image link to an image in the images directory 
        print "<td><img src=./images/database/icon.png ".$row["Customer"]." /></td>"; 
        print "<td><a href=customerChangeDelete.php?id=".$row[CustomerID].">Change/Delete</a></td>";  
        print "</tr>";  
    } //Finish the while loop 
    print "</table>"; //Finsh the table 
} //Finish 'if rows found' 

else {  
       // print status message  
    print "<p>No rows found!<p>";  
}  

?> 
<a href='ad.php'><span>BACK TO THE ADMIN PAGE</span></a>

</body>
</html>

<?php  
} 
?>