<?php
include "connect.php";
	$record_sql = "SELECT MAX(record_number) FROM tickets";
	echo $record_sql;
    $current_record_number = mysqli_query($con, $record_sql);
    echo $current_record_number;
    $new_record_number = $current_record_number + 1;
    echo $new_record_number;
?>
