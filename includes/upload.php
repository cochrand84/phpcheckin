<?php

include "connect.php";

$sql="INSERT INTO tickets (firstname, lastname, check_in_date, due_date, status, image1) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[check_in_date]','$_POST[due_date]','$_POST[status]','$_POST[image1]')";

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error());

  }

echo "1 record added";

mysqli_close($con);

include "footer.php";
?>