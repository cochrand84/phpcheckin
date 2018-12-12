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
    <label for="vin">VIN</label>
    <input type="text" id="vindecoder" value="<?php echo $VIN; ?>"" name="vindecoder" maxlength="17"/>
    <button id="submit_btn" type="submit">Decode Vin</button>
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $row["firstname"]; ?>">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $row["lastname"]; ?>">
    <label for="email">Email Address</label>
    <input type="text" name="email" id="email" value="<?php echo $row["email"]; ?>">
    <label for="year">Year</label>
    <input type="text" name="year" id="year" value="<?php echo $row["year"]; ?>">
    <label for="make">Make</label>
    <input type="text" name="make" id="make" value="<?php echo $Make; ?>"">
    <label for="model">Model</label>
    <input type="text" name="model" id="model" value="<?php echo $Model; ?>"">
    <label for="location">Location</label>
    <input type="text" name="location" id="location" value="<?php echo $row["location"]; ?>">
    <label for="due_date">Due Date</label>
    <input type="date" name="due_date" value="" min="<?php echo date("Y-m-d"); ?>">
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
    <label for="image1">Image 1</label>
    <input type="file" name="image1" id="image1" /><br />
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

<?php
if (isset($_POST['submitedit'])) {
    require "../config.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
$editdata = array(
            "id"        => $incommingid,
            "vin"       => $_POST['vindecoder'],
            "firstname" => $_POST['firstname'],
         #   "lastname"  => $_POST['lastname'],
        #    "email"     => $_POST['email'],
       #     "year"      => $_POST['year'],
      #      "location"  => $_POST['location'],
     #       "status"    => $_POST['status'],
    #        "make"      => $_POST['make'],
   #         "model"     => $_POST['model'],
  #          "due_date"  => $_POST['due_date'],
 #           "image1"    => $_POST['image1']
);

        $sql = "UPDATE tickets SET vin=:vin, firstname=:firstname WHERE id=:id";
        
        $statement = $connection->prepare($sql);
        $statement->execute($editdata);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>



<?php if (isset($_POST['submitedit']) && $statement) { ?>
    <blockquote><?php echo $_POST['id']; ?> successfully edited.</blockquote>
<?php } ?>



<?php require "templates/footer.php"; ?>
