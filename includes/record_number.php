<?php
require_once("config.php");
require_once("connect.php");
    $current_record_number = mysqli_query($con,'SELECT record_number FROM tickets ORDER BY  record_number DESC');
    $new_record_number = $current_record_number + 1;
?>
