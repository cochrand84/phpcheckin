<?php
require "templates/header.php";
require "templates/mobile-detect/Mobile_Detect.php";
/**
 * Function to query information based on 
 * a parameter: in this case, location.
 *
 */

$_GET['linkid'];
$incommingid = $_GET['linkid'];

$detect = new Mobile_Detect;

if ($detect->isMobile()) {
    echo '<link rel="stylesheet" href="css/mobile_table_style.css">';
} else {
    echo '<link rel="stylesheet" href="css/table_style.css">';
}

if ($incommingid == 'noncomplete') {
    try {
        
        require "../config.php";
        require "../common.php";
        
        $connection = new PDO($dsn, $username, $password, $options);
        
        $sql = "SELECT * FROM tickets WHERE NOT (status = 'complete') ORDER by due_date ASC";
        
        $location = $_POST['location'];
        
        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();
        
        $result = $statement->fetchAll();
    }
    catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

        
<?php
if ($incommingid == 'noncomplete') {
    if ($result && $statement->rowCount() > 0) {
?>
       <h2>Results</h2>

<?php
        if ($detect->isMobile()) {
            require "templates/mobile_edittable.php";
        } else {
            require "templates/edittable.php";
        }
?>

    <?php
    } else {
?>
       <blockquote>No results found for <?php
        echo escape($_POST['status']);
?>.</blockquote>
    <?php
    }
}
?>


<?php

if ($incommingid == 'all') {
    try {
        
        require "../config.php";
        require "../common.php";
        
        $connection = new PDO($dsn, $username, $password, $options);
        
        $sql = "SELECT * FROM tickets ORDER by due_date ASC";
        
        $location = $_POST['location'];
        
        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();
        
        $result = $statement->fetchAll();
    }
    catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
       
<?php
if ($incommingid == 'all') {
    if ($result && $statement->rowCount() > 0) {
?>
       <h2>Results</h2>

<?php
        if ($detect->isMobile()) {
            require "templates/mobile_edittable.php";
        } else {
            require "templates/edittable.php";
        }
?>

    <?php
    } else {
?>
       <blockquote>No results found for <?php
        echo escape($_POST['status']);
?>.</blockquote>
    <?php
    }
}
?> 

<?php

if ($incommingid == 'complete') {
    try {
        
        require "../config.php";
        require "../common.php";
        
        $connection = new PDO($dsn, $username, $password, $options);
        
        $sql = "SELECT * FROM tickets WHERE (status = 'complete') ORDER by due_date ASC";
        
        $location = $_POST['location'];
        
        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();
        
        $result = $statement->fetchAll();
    }
    catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
       
<?php
if ($incommingid == 'complete') {
    if ($result && $statement->rowCount() > 0) {
?>
       <h2>Results</h2>

<?php
        if ($detect->isMobile()) {
            require "templates/mobile_edittable.php";
        } else {
            require "templates/edittable.php";
        }
?>
   <?php
    } else {
?>
       <blockquote>No results found for <?php
        echo escape($_POST['status']);
?>.</blockquote>
    <?php
    }
}
?> 

<?php

if ($incommingid == 'storage') {
    try {
        
        require "../config.php";
        require "../common.php";
        
        $connection = new PDO($dsn, $username, $password, $options);
        
        $sql = "SELECT * FROM tickets WHERE (status = 'storage') ORDER by due_date ASC";
        
        $location = $_POST['location'];
        
        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();
        
        $result = $statement->fetchAll();
    }
    catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
       
<?php
if ($incommingid == 'storage') {
    if ($result && $statement->rowCount() > 0) {
?>
       <h2>Results</h2>

<?php
        if ($detect->isMobile()) {
            require "templates/mobile_edittable.php";
        } else {
            require "templates/edittable.php";
        }
?>
   <?php
    } else {
?>
       <blockquote>No results found for <?php
        echo escape($_POST['status']);
?>.</blockquote>
    <?php
    }
}
?>

<?php

if ($incommingid == 'consignment') {
    try {
        
        require "../config.php";
        require "../common.php";
        
        $connection = new PDO($dsn, $username, $password, $options);
        
        $sql = "SELECT * FROM tickets WHERE (status = 'consignment') ORDER by due_date ASC";
        
        $location = $_POST['location'];
        
        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();
        
        $result = $statement->fetchAll();
    }
    catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
       
<?php
if ($incommingid == 'consignment') {
    if ($result && $statement->rowCount() > 0) {
?>
       <h2>Results</h2>

<?php
        if ($detect->isMobile()) {
            require "templates/mobile_edittable.php";
        } else {
            require "templates/edittable.php";
        }
?>
   <?php
    } else {
?>
       <blockquote>No results found for <?php
        echo escape($_POST['status']);
?>.</blockquote>
    <?php
    }
}
?>

<?php
require "templates/footer.php";
?>