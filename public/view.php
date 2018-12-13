<?php 


// include "../config.php";
?>
<?php

if(!empty($_GET['rand'])){
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'a51checkin';
    $dbPassword = 'ylKy724$';
    $dbName     = 'area51_checkin';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT image1 FROM images WHERE rand = {$_GET['rand']}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image1'];
    }else{
        echo 'Image not found...';
    }
}
?>
