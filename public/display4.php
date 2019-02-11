

<html>
    <head>
    </head>
    <body>
    	<link rel="stylesheet" href="css/style.css">
<?php

    try  {
        
        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT image1 FROM tickets";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchColumn();

echo $result;

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
        
    

?>