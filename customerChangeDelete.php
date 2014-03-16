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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>Customer Ammended</h1>
<br><br><a href='ad.php'><span>ADMIN</span></a>  <br><a href='displayCustomer.php'><span>BACK TO CUSTOMERS</span></a>

<?php
ob_start();

include "connection.php"; 

//get id of record
$CustomerID=$_GET['id'];

// create query 
$query = "SELECT * FROM Customer WHERE CustomerID = '$CustomerID'"; 

// execute query - put the results in $result (an array) 
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error()); 

//Check to see you have got at least 1 record 
if (mysql_num_rows($result) > 0) 
{
$row = mysql_fetch_array($result);

//print out record details on a form     
//Otherwise no rows found 
	} // end if
		else echo "No rows found"; 
    
	// Close the DBMS connection 
   		mysql_close($connection); 
?> 
<form name="form1" id="form1" method="GET" action= "customerChangeDeleteAction.php"> 
<table width="100%"  border="0"> 
        <tr> 
          <td width="25%">Customer ID </td> 
          <td width="75%"><input type="hidden" name="txtID" value="<?php echo $row["CustomerID"]; ?>" /><?php echo $row["CustomerID"]; ?><font size="2"> (Field hidden as cannot change key field)</font></td> 
        </tr> 
        <tr> 
          <td>First Name</td> 
          <td><input type="text" name="txtFirst" value="<?php echo $row["Firstnames"]; ?>"/></td> 
        </tr> 
        <tr> 
          <td>Surname</td> 
          <td><input type="text" name="txtSurname"  value="<?php echo  $row["Surname"]; ?>"/></td> 
        </tr> 
        <tr> 
          <td>User Name</td> 
          <td><input type="text" name="txtUser" value="<?php echo $row["Username"]; ?>"/></td> 
        </tr> 
		<tr> 
          <td>Email</td> 
          <td><input type="text" name="txtEmail" value="<?php echo $row["Email"]; ?>"/></td> 
        </tr>
		<tr> 
          <td>Password</td> 
          <td><input type="text" name="txtPassword" value="<?php echo $row["Password"]; ?>"/></td> 
        </tr>
        <tr><td><input name="Amend" type="Submit" value="Amend" /></td><td><input name="Delete" type="Submit" value="Delete" /></td></tr> 
      </table> 
    </form> 



</body>
</html>

<?php  
} 
?>
