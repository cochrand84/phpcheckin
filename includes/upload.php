<html>

<body>

<?php
include "config.php";

$con = mysqli_connect($mysql_database_server, $mysql_database_username, $mysql_database_password);

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

mysqli_select_db($con, $mysql_databasename);

$sql="INSERT INTO tickets (firstname, lastname)

VALUES

('$_POST[firstname]','$_POST[lastname]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error());

  }

echo "1 record added";

 

mysqli_close($con)

?>

</body>

</html>