<?php 
//define('phpusername123', 'phpusername123');
//if(!isset($_COOKIE[phpusername123])) {
//	echo "Not logged in, please login";
//} else {
//    echo "Logged in as " . $_COOKIE[phpusername123];
//}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Area 51 Check-in App</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" herf="lightbox/css/lightbox.css">
</head>

<body>
	<h1>Area 51 Check-in App</h1>

<a href="templates/password_protect.php?logout=1" class="linkbutton">Logout</a>
<a href="index.php" class="linkbutton">Back to home</a>

<?php

/**
 * Function to query information based on 
 * a parameter: in this case, location.
 *
 */

if (isset($_POST['submit'])) {
    try  {
        
        require "../../config.php";
        require "../../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM tickets WHERE NOT (status = 'complete') ORDER by due_date ASC";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

        
<?php  
if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

<?php require "../templates/edittable.php"; ?>

    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} ?>


<?php

if (isset($_POST['submit2'])) {
    try  {
        
        require "../../config.php";
        require "../../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM tickets ORDER by due_date ASC";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
        
<?php  
if (isset($_POST['submit2'])) {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

<?php require "../templates/edittable.php"; ?>

    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} ?> 

<?php

if (isset($_POST['submit3'])) {
    try  {
        
        require "../../config.php";
        require "../../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM tickets WHERE (status = 'complete') ORDER by due_date ASC";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
        
<?php  
if (isset($_POST['submit3'])) {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

<?php require "../templates/edittable.php"; ?>
    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} ?> 
<h2>Select your edit option</h2>

<form method="post">
    <input type="submit" name="submit" value="Edit non-Complete">
    <input type="submit" name="submit2" value="Edit All">
    <input type="submit" name="submit3" value="Edit Complete">
</form>
