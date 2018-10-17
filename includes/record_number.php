<?php
include "connect.php";
	$record_sql = "SELECT MAX(record_number) FROM tickets";
	$current_record_number = mysqli_query($con, $record_sql);
    $new_record_number = $current_record_number + 1;
    ?>