<?php
include 'config.php';

$uploaddir = 'uploads/';

$uploadfile = $uploaddir . basename($_FILES['image']['name']);

//if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
//    echo "Image succesfully uploaded.";
//} else {
//    echo "Image uploading failed.";
//}



  if(isset($_POST['save']))
{
    $sql = "INSERT INTO tickets (record_number, firstname, lastname)
    VALUES ('".$_POST["record_number"]."','".$_POST["firstname"]."','".$_POST["lastname"]."')";

    $result = mysqli_query($connection,$sql);
}
echo $result;
$connection->close();
?> 