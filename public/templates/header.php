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

<body>
	<h1>Area 51 Check-in App</h1>

<?php
include "tracking.php";
include "templates/password_protect.php";

    <a href="edit.php?linkid=noncomplete">Edit Non-Complete</a>
    <a href="edit.php?linkid=all">Edit All</a>
    <a href="edit.php?linkid=complete">Edit Complete</a>
    <a href="templates/password_protect.php?logout=1" class="linkbutton">Logout</a>
	<a href="create.php" class="linkbutton">Create New</a>
	<a href="index.php" class="linkbutton">Back to home</a>
