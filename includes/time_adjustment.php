<?php
$starttime = date("Y-m-d H:i:s");
$convertedtime = date('Y-m-d H:i:s',strtotime('-1 hour',strtotime($starttime))); 
echo $convertedtime
?>