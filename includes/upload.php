<?php
include 'config.php';
include 'connect.php';

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }


 

$sql="INSERT INTO tickets (record_number, lastname)

VALUES

('$_POST[record_number]','$_POST[lastname]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)
?> 