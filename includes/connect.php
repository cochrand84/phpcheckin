<?php
require_once("config.php");
$con = mysql_connect($mysql_database_server, $mysql_database_username, $mysql_database_password);
if (!$con){
    die("Database Connection Failed" . mysql_error($con));
}
$select_db = mysql_select_db($con, $mysql_databasename);
if (!$select_db){
    die("Database Selection Failed" . mysql_error($con));
}
?>