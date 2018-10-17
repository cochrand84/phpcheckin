<?php
require_once("config.php");


if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }


 

$sql="INSERT INTO tickets (record_number, lastname)

VALUES

('$_POST['$record_number']','$_POST['$lastname']')";

 

if (!mysqli_query($sql,$con))

  {

  die('Error: ' . mysqli_query());

  }

echo "1 record added";

echo $new_record_number 'updated'

mysql_close($con)
?> 