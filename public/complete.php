<?php

require "templates/header.php";

$_GET['editid'];
$incommingid = $_GET['editid'];

 try  {
        $connection = new PDO($dsn, $username, $password, $options);

$sql = "UPDATE `tickets` SET `status` = 'Complete' WHERE `id` = '$editid';";

$statement = $connection->prepare($sql);
$statement->execute($editdata);
echo "<meta http-equiv='refresh' content='0'>";

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }