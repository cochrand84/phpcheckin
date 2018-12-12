<?php

require "../config.php";
if(!empty($_GET['rand'])){
 
    $db = new mysqli($host, $username, $password, $dbname);
    
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    $result = $db->query("SELECT image1 FROM images WHERE rand = {$_GET['rand']}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        header("Content-type: image/jpg"); 
        echo $imgData['image1'];
    }else{
        echo 'Image not found...';
    }
}
?>
