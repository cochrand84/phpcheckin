<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Area 51 Check-in App</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" herf="lightbox/css/lightbox.css">

</head>
<?php

include "tracking.php";

//Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "yup, it's set";
 }
 else{
 	echo "nope, it's not set";
 }

?>

<div class="navbar">
    <a href="edit.php?linkid=noncomplete" class="linkbutton">Edit Non-Complete</a>
    <a href="edit.php?linkid=all" class="linkbutton">Edit All</a>
    <a href="edit.php?linkid=complete" class="linkbutton">Edit Complete</a>
	<a href="create.php" class="linkbutton">Create New</a>
	<a href="index.php" class="linkbutton">Back to home</a>
	<a href="logout.php" class="linkbutton">Logout</a>
</div>
<div class="main">
<body>
	<h1>Area 51 Check-in App</h1>