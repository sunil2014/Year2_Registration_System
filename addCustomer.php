<?php
// (1) Use include to database connection and select database	 
include
"connection.php";
?>
<?php 
   
// (2) gather all details from form e.g. 
$newFirstname = $_POST['txtfirstname'];
$newSurname = $_POST['txtsurname'];
$newUsername = $_POST['txtusername'];
$newEmail = $_POST['txtemail'];
$newPassword = $_POST['txtpassword'];
   
// (3) Create an INSERT query of the form 
$query = "INSERT INTO Customer (Firstnames, Surname, Username, Email, Password) VALUES ('$newFirstname', '$newSurname', '$newUsername', '$newEmail', '$newPassword')"; 

// (4) Run query through connection
$result

= mysql_query($query) or die ("Error in query");
// see if any rows were returned

// (5) print message with ID of inserted record    
header("Location: userReceipt.php?"."CustomerID=". mysql_insert_id($connection));   
        
// (6) close connection 
    mysql_close($connection);     

?> 
