<?php

include "connect.php";

$sql="INSERT INTO tickets (firstname, lastname, check_in_date) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[check_in_date]')";

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error());

  }

echo "1 record added";

mysqli_close($con);

include "footer.php";
?>