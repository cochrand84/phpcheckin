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
 #       require "../common.php"; 

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
                 echo $row["id"]; 
                 echo $row["firstname"]; 
                 echo $row["lastname"]; 
                 echo $row["email"]; 
                 echo $row["year"]; 
                 echo $row["location"]; 
                 echo $row["date"]; 
                 echo $row["status"];
            
         } 
        } else { 
        echo $_POST['status'];
     } 


?>
<h2>Edit a ticket</h2>

<form method="post">
    <input type="text" name="id" value="<?php echo $row["id"]; ?>">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $row["firstname"]; ?>">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $row["lastname"]; ?>">
    <label for="email">Email Address</label>
    <input type="text" name="email" id="email" value="<?php echo $row["email"]; ?>">
    <label for="year">Year</label>
    <input type="text" name="year" id="year" value="<?php echo $row["year"]; ?>">
    <label for="location">Location</label>
    <input type="text" name="location" id="location" value="<?php echo $row["location"]; ?>">
    <label for="status">Status</label>
    <select name="status" value="<?php echo $row["status"]; ?>">
            <option value="Checked In">Checked In</option>
            <option value="Waiting on Parts">Waiting on Parts</option>
            <option value="In Paint">In Paint</option>
            <option value="In Service">In Service</option>
            <option value="Waiting on Lift">Waiting on Lift</option>
            <option value="Awaiting Deposit">Awaiting Deposit</option>
            <option value="Ready For Pickup">Ready For Pickup</option>
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
            "year"      => $_POST['year'],
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



<?php require "templates/footer.php"; ?>
