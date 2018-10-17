<?php
include "connect.php";
    $current_record_number = ($con, mysqli_query('SELECT record_number FROM tickets ORDER BY  record_number DESC'));
    $new_record_number = $current_record_number + 1;
?>
