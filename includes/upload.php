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

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>