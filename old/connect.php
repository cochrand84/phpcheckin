<?php
require_once("config.php");
$con = mysqli_connect($mysql_database_server, $mysql_database_username, $mysql_database_password);
if (!$con){
    die("Database Connection Failed" . mysqli_error($con));
}
$select_db = mysqli_select_db($con, $mysql_databasename);
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($con));
}
?>