<?php
require_once("config.php");
<?php
    $current_record_number = mysql_query('SELECT record_number FROM tickets ORDER BY  record_number DESC');
?>
?>