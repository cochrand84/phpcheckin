<?php
require_once("config.php");
    $current_record_number = mysqli_query('SELECT record_number FROM tickets ORDER BY  record_number DESC');
    echo 'current record number=';
    echo $current_record_number;
    $new_record_number = $current_record_number + 1;
    echo '   new record number=';
    echo $new_record_number;
?>
