<?php
require_once("config.php");
$connection = mysqli_connect($mysql_database_server, $mysql_database_username, $mysql_database_password);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $mysql_databasename);
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>