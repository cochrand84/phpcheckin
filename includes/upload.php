<html>

<body>

<?php
include "config.php";

$con = mysql_connect($mysql_database_server, $mysql_database_username, $mysql_database_password);

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db("cis_id", $con);

$sql="INSERT INTO tickets (firstname, lastname, record_number)

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