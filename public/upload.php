<?php
require "templates/header.php";

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    if($check !== false){
        $image1 = $_FILES['image1']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image1));
        require "../config.php";
        $db = new mysqli($host, $username, $password, $dbname);
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        $insert = $db->query("INSERT into images (image1, created) VALUES ('$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>