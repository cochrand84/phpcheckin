<?php

/**
 * Use an HTML form to create a new entry in the
 * tickets table.
 *
 */

require "templates/header.php";
$_GET['editid'];
$incommingid = $_GET['editid'];

try  {
        
        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM `tickets` WHERE (ID = $incommingid)";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

if ($result && $statement->rowCount() > 0) {
        foreach ($result as $row) { 
                 escape($row["id"]) = $id; 
                 escape($row["firstname"]) = $firstname; 
                 escape($row["lastname"]) = $lastname; 
                 escape($row["email"]) = $email; 
                 escape($row["year"]) = $year; 
                 escape($row["location"]) = $location; 
                 escape($row["date"]) = $date; 
                 escape($row["status"]) = $status;
            
         } 
        } else { 
        echo escape($_POST['status']);
     } 


?>
<h2>Edit a ticket</h2>

<form method="post">
    <input type="text" name="id" value="<?php echo $id; ?>">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
    <label for="email">Email Address</label>
    <input type="text" name="email" id="email" value="<?php echo $email; ?>">
    <label for="year">Year</label>
    <input type="text" name="year" id="year" value="<?php echo $year; ?>">
    <label for="location">Location</label>
    <input type="text" name="location" id="location" value="<?php echo $location; ?>">
    <label for="status">Status</label>
    <select name="status">
    <option value="checked-in">Checked-In</option>
    <option value="waiting">Waiting</option>
    <option value="finished">Finished</option>
    <option value="complete">Complete</option>
    </select>
    <br><br>
    <input type="submit" name="submitedit" value="Submit edit">
</form>

<a href="index.php">Back to home</a>

<?php
if (isset($_POST['submitedit'])) {
    require "../config.php";
    require "../common.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
        $edit = array(
            "id"        => $_POST['id'],
            "firstname" => $_POST['firstname'],
            "lastname"  => $_POST['lastname'],
            "email"     => $_POST['email'],
            "year"       => $_POST['year'],
            "location"  => $_POST['location'],
            "status"    => $_POST['status']
        );

        $sql = sprintf(
                "UPDATE INTO %s (%s) values (%s)",
                "tickets",
                implode(", ", array_keys($edit)),
                ":" . implode(", :", array_keys($edit))
        );
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>



<?php if (isset($_POST['submitedit']) && $statement) { ?>
    <blockquote><?php echo $_POST['id']; ?> successfully edited.</blockquote>
<?php } ?>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
