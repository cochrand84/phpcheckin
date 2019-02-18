<?php

require "templates/header.php";
require "../config.php"; 
require "../common.php";
include "templates/password_protect.php"; 


$_GET['editid'];
$incommingid = $_GET['editid'];
$dataTime = date("Y-m-d H:i:s");
$connection = new PDO($dsn, $username, $password, $options);

$sql = "UPDATE `tickets` SET `status` = 'Complete', `datecomplete` = '$dataTime' WHERE `id` = '$incommingid';";

$statement = $connection->prepare($sql);
$statement->execute($editdata);

echo "Record ";
echo $incommingid;
echo " has been marked as complete";

?>


<form method="post" action="edit.php">
    <input type="submit" name="submit" value="Edit non-Complete">
    <input type="submit" name="submit2" value="Edit All">
    <input type="submit" name="submit3" value="Edit Complete">
</form>

<?php
require "templates/footer.php";

?>
