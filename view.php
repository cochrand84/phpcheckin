<?php
include "includes/connect.php";
// testing a space
$sql = "SELECT * FROM tickets";
mysqli_fetch_array($sql);
?>