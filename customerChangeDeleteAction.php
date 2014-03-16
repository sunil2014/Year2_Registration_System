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


<?php
ob_start();

include "connection.php"; 

	//gather data from form
		$CustomerID=$_GET['txtID'];
   		$Firstnames=$_GET['txtFirst'];
   		$Surname=$_GET['txtSurname'];
   		$Username=$_GET['txtUser'];
   		$Email=$_GET['txtEmail'];
   		$Password=$_GET['txtPassword'];
         
	// Was the Amend presed 
		if (isset($_GET['Amend'])) 
		{ 
         $query = "UPDATE Customer SET ". 
                "Firstnames = '$Firstnames', " . 
                  "Surname = '$Surname', " .
				  "Username = '$Username', " .
				  "Email = '$Email', " .
				  "Password = '$Password' " .                     
                  "WHERE CustomerID = $CustomerID"; 

      // execute query 
      	$result = mysql_query($query) ; 
      
     	echo "Customer Record ".$CustomerID." was amended OK";   
   
		}//end if 
	// Or was Delete pressed 
		else if (isset($_GET['Delete'])) 
		
// create query to delete record  
$query = "DELETE FROM Customer WHERE CustomerID = '$CustomerID' ";  
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());  
  // see if any rows were affected 
if (mysql_affected_rows() > 0) {
	echo "The Customer with ID = $CustomerID was deleted";   
  //If so , return to calling page using header function and HTTP_REFERER    
  }  
  else {  
    // print error message  
    echo "Error in query: $query. ".mysql_error(); 
    exit; 
  } 
?>

<br><br><a href='index.php'><span>BACK TO THE INDEX PAGE</span></a> <a href='displayCustomer.php'><span>BACK TO THE CUSTOMER TABLE</span></a>


</body>
</html>

<?php  
} 
?>