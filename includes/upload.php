<?php
include 'config.php';

$uploaddir = 'uploads/';

$uploadfile = $uploaddir . basename($_FILES['image']['name']);

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "Image succesfully uploaded.";
} else {
    echo "Image uploading failed.";
}

$sql = "INSERT INTO tickets (record_number,firstname, lastname, email)
VALUES ('$_POST[record_number]','$_POST[firstname]', '$_POST[lastname]', '$_POST[email]')";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$connection->close();
?> 