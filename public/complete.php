<?php

require "templates/header.php";
require "../config.php"; 
require "../common.php";

$_GET['editid'];
$incommingid = $_GET['editid'];

$connection = new PDO($dsn, $username, $password, $options);

$sql = "UPDATE `tickets` SET `status` = 'Complete' WHERE `id` = '$incommingid';";

$statement = $connection->prepare($sql);
$statement->execute($editdata);