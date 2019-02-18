<?php

/**
 * Use an HTML form to create a new entry in the
 * tickets table.
 *
 */

require "templates/header.php";
include "templates/password_protect.php"; 

$_GET['editid'];
$incommingid = $_GET['editid'];

try  {
        
        require "../config.php"; 

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

if (isset($_POST['submitedit'])) {
    require "../config.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
$editdata = array(
            "id"        => $incommingid,
            "vin"       => $_POST['vindecoder'],
            "firstname" => $_POST['firstname'],
            "lastname"  => $_POST['lastname'],
            "email"     => $_POST['email'],
            "year"      => $_POST['year'],
            "location"  => $_POST['location'],
            "status"    => $_POST['status'],
            "make"      => $_POST['make'],
            "model"     => $_POST['model'],
            "due_date"  => $_POST['due_date'],
            "image1"    => $_POST['image1']
);

        $sql = "UPDATE tickets SET vin=:vin, firstname=:firstname WHERE id=:id";
        
        $statement = $connection->prepare($sql);
        $statement->execute($editdata);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['submitedit']) && $statement) { ?>
    <blockquote><?php echo $_POST['id']; ?> successfully edited.</blockquote>
<?php } ?>
<h2>Check-out a ticket</h2>


<div class="container">
        <form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-25">
            <label for="vin">VIN</label>
        </div>
        <div class="col-75">
            <input type="text" id="vindecoder" value="<?php echo $VIN; ?>"" name="vindecoder" maxlength="17" required/>
        </div>
    </div>    
    <div class="row">    
        <div class="col-25">
            <label for="firstname">First Name</label>
        </div>
        <div class="col-75">
            <input type="text" name="firstname" id="firstname" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="lastname">Last Name</label>
        </div>
        <div class="col-75">
            <input type="text" name="lastname" id="lastname" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="email">Email Address</label>
        </div>
        <div class="col-75">
            <input type="text" name="email" id="email" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="phone">Phone Number</label>
        </div>
        <div class="col-75">
            <input type="text" name="phone" id="phone" required> 
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">   
            <label for="location">Location</label>
        </div>
        <div class="col-75">
            <input type="text" name="location" id="location" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="due_date">Due Date</label>
        </div>
        <div class="col-75">
            <input type="date" name="due_date" value="" min="<?php echo date("Y-m-d"); ?>" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="status">Status</label>
        </div>
        <div class="col-75">
            <select name="status"required>
            <option value="selectstatus" selected>Select Status</option>
                    <option value="Checked In">Checked In</option>
                    <option value="Waiting on Parts">Waiting on Parts</option>
                    <option value="In Paint">In Paint</option>
                    <option value="In Service">In Service</option>
                    <option value="Waiting on Lift">Waiting on Lift</option>
                    <option value="Awaiting Deposit">Awaiting Deposit</option>
                    <option value="Ready For Pickup">Ready For Pickup</option>
                    <option value="Complete">Complete</option>
            </select><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image1">Image 1</label>
        </div>
        <div class="col-75">
            <input type="file" name="image1" id="image1" required/><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image2">Image 2</label>
        </div>
        <div class="col-75">
            <input type="file" name="image2" id="image2" required/><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image3">Image 3</label>
        </div>
        <div class="col-75">
            <input type="file" name="image3" id="image3" required/><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image4">Image 4</label>
        </div>
        <div class="col-75">
            <input type="file" name="image4" id="image4" required/><br />
        </div>
    </div>
    <div class="row">
        <input type="submit" name="submitedit" value="Submit Edit">
    </div>
        </form>
</div>

<?php require "templates/footer.php"; ?>
