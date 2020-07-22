<?php

require "templates/header.php";

$_GET['searchvalue'];
$incommingid = $_GET['searchvalue'];

    try  {
        
        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM tickets WHERE '$incommingid' IN (lastname, firstname, vin, id, phpid, phone, phpid, email)";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

<?php require "templates/edittable.php"; ?>

    <?php } else { ?>
        <blockquote>No results found for <?php echo $incommingid; ?>.</blockquote>
    <?php } ?>

<?php require "templates/footer.php"; ?>