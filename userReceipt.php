<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1></h1>



<?php
// (1) Use include to database connection and select database	 
include
"connection.php";
?>
<?php  
// (2)gather details of CustomerID sent 
$customerId = $_GET['CustomerID'] ;
   
// (3)create query 
$query = "SELECT * FROM Customer WHERE CustomerID = $customerId";
	
// (4) Run the query on the customer table through the connection
$result = mysql_query ($query);

// (5) print message with ID of inserted record    
if ($row = mysql_fetch_array($result)) 
{ 
print "The following Customer was added"; 
print "<br>Customer ID: " . $row["CustomerID"]; 
print "<br>First Name: " . $row["Firstnames"]; 
print "<br>Surname: " . $row["Surname"]; 
print "<br>User Name: " . $row["Username"]; 
print "<br>Email: " . $row["Email"]; 
print "<br>Password: " . $row["Password"]; 
}

//(6)close connection
    mysql_close($connection);     
?>
<br><br><a href='index.php'><span>Back to the index page</span></a> <a href='displayCustomer.php'><span>back to the Customertable</span></a>

</body>
</html>
