<?php
	//(1) Open the database connection 
 	include "./connection.php";

// (2) Create a query
       $query = "SELECT * FROM symbols"; 
    
// (3)Run the query-in this example there an error check to generate a 
      //message if there is a problem with the query
      $result = mysql_query($query) or die("Error in query: $query ".mysql_error());
// (4) Display the results using a table this time 
      //First print the table and headers
   print "<table border = 1 >";          
   print " <tr><th>Country</th><th>Animal</th></tr>";  
   
 //Then print all the rows using a loop 
   while ($row = mysql_fetch_array($result)) 
   {                                                                            
      print "  <tr>";                                                         
      print "    <td>" . $row["country"] . "</td>";                 
      print "    <td>" . $row["animal"].   "</td>";                  
	print "  </tr>";                                                        
   }                                                                            
   print "</table>";
