<?php
$starttime = date("Y-m-d");
$convertedtime = date('Y-m-d',strtotime('-1 hour',strtotime($starttime))); 
echo $convertedtime
?>