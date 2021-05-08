
<?php
require "templates/header.php";
?>

<blockquote>Ticket <?php echo $_GET['editid']; ?> successfully added. </blockquote>

<?php
    include "templates/posapi.php";
?>