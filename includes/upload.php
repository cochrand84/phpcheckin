<?php

include "connect.php";

$name= $_FILES['image1']['name'];

$tmp_name= $_FILES['image1']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

if (isset($name)) {

$path= 'uploads/';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';

}
}
}



$sql="INSERT INTO tickets (firstname, lastname, check_in_date, due_date, status, image1) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[check_in_date]','$_POST[due_date]','$_POST[status]','$_FILES["$name"]')";

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error());

  }

echo "1 record added";

mysqli_close($con);

include "footer.php";
?>