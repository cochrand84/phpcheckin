<?php

include "connect.php";

$sql="INSERT INTO tickets (firstname, lastname) VALUES ('$_POST[firstname]','$_POST[lastname]')";

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error());

  }

echo "1 record added";

mysqli_close($con)

include "includes/footer.php";
?>