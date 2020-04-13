<?php
require "templates/header.php";
/**
 * Function to query information based on 
 * a parameter: in this case, location.
 *
 */

$_GET['linkid'];
$incommingid = $_GET['linkid'];



if ($incommingid == 'noncomplete') {
    try  {
        
        require "../config.php";
        require "../common.php";

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
if ($incommingid == 'noncomplete') {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

<?php require "templates/edittable.php"; ?>

    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} ?>


<?php

if ($incommingid == 'all') {
    try  {
        
        require "../config.php";
        require "../common.php";

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
if ($incommingid == 'all') {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

<?php require "templates/edittable.php"; ?>

    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} ?> 

<?php

if ($incommingid == 'complete') {
    try  {
        
        require "../config.php";
        require "../common.php";

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
if ($incommingid == 'complete') {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

<?php require "templates/edittable.php"; ?>
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



<?php require "templates/footer.php"; ?>
