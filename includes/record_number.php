<?php
include "connect.php";
	$record_sql = mysqli_query('SELECT record_number FROM tickets ORDER BY  record_number DESC')
    $current_record_number = ($con, $record_sql);
    $new_record_number = $current_record_number + 1;
?>
