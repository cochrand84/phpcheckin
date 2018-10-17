<?php
include "includes/connect.php";
$sql = "SELECT * FROM tickets";

mysqli_fetch_array($con, $sql);
?>