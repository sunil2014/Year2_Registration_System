<body>
<h1 align="center">Writing to Databases </h1>
<p><a href="displayCustomer.php">Display</a> Customer Table</p>
<form name="insertcustomer" method="POST" action="addCustomer.php">
  <h2>Add Customer</h2>
  <p>Given Name 
    <input name="txtGiven" type="text" id="txtGiven">
  </p>
  <p>Family Name 
    <input name="txtFamily" type="text" id="txtFamily">
  </p>
  <p>User Name 
    <input name="txtUser" type="text" id="txtUser">
  </p>
  <p>Email 
    <input name="txtEmail" type="text" id="txtEmail">
  </p>
  <p>Password 
    <input type="password" input name="txtPassword" type="text" id="txtPassword">
  </p>
  <p>
    <input type="submit" name="Submit" value="Submit">
  </p>
</form>
</body>
