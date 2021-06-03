<?php

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
                    $editid                         = $row["id"]; 
                    $editvin                        = $row["vin"];
                    $editfirstname                  = $row["firstname"]; 
                    $editlastname                   = $row["lastname"]; 
                    $editemail                      = $row["email"]; 
                    $edityear                       = $row["year"]; 
                    $editmake                       = $row["make"];
                    $editmodel                      = $row["model"];
                    $editlocation                   = $row["location"]; 
                    $editdate                       = $row["date"]; 
                    $editstatus                     = $row["status"];
                    $editphone                      = $row["phone"];
                    $editimage1                     = $row["image1"];
                    $editimage2                     = $row["image2"];
                    $editimage3                     = $row["image3"];
                    $editimage4                     = $row["image4"];
                    $editimage5                     = $row["image5"];
                    $editimage6                     = $row["image6"];                   
                    $editduedate                    = $row["due_date"];
                    $editdescription                = $row["description"];
                    $editservicenote1               = $row['servicenote1'];
                    $editservicenote2               = $row['servicenote2'];
                    $editservicenote3               = $row['servicenote3'];
                    $editservicenote1date           = $row['servicenote1date'];
                    $editservicenote2date           = $row['servicenote2date'];
                    $editservicenote3date           = $row['servicenote3date'];
                    $editphpid                      = $row['phpid'];
                    $editmiles_in                   = $row['miles_in'];
                    $editmiles_out                  = $row['miles_out'];

         } 
        } else { 
        echo $_POST['status'];
     } 

if (isset($_POST['submitedit'])) {

     
        $db = new mysqli($host, $username, $password, $dbname);
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
  

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
            $editedvin                              = $_POST['vin'];
            $editedfirstname                        = $_POST['firstname'];
            $editedlastname                         = $_POST['lastname'];
            $editedemail                            = $_POST['email'];
            $editedphone                            = $_POST['phone'];
            $editedyear                             = $_POST['year'];
            $editedlocation                         = $_POST['location'];
            $editedstatus                           = $_POST['status'];
            $editedmake                             = $_POST['make'];
            $editedmodel                            = $_POST['model'];
            $editeddue_date                         = $_POST['due_date'];
            $editeddescription                      = $_POST['description'];
            $editedservicenote1                     = $_POST['servicenote1'];
            $editedservicenote2                     = $_POST['servicenote2'];
            $editedservicenote3                     = $_POST['servicenote3'];
            $editedservicenote1date                 = $_POST['servicenote1date'];
            $editedservicenote2date                 = $_POST['servicenote2date'];
            $editedservicenote3date                 = $_POST['servicenote3date'];
            $editedphpid                            = $_POST['phpid'];
            $editedmiles_in                         = $_POST['miles_in'];
            $editedmiles_out                        = $_POST['miles_out'];
            

         $sql = "UPDATE `tickets` SET `vin` = '$editedvin', `firstname` = '$editedfirstname', `lastname` = '$editedlastname', `email` = '$editedemail', `phone` = '$editedphone', `year` = '$editedyear', `location` = '$editedlocation', `status` = '$editedstatus', `make` = '$editedmake', `model` = '$editedmodel', `due_date` = '$editeddue_date', `description` = '$editeddescription', `servicenote1` = '$editedservicenote1',`servicenote2` = '$editedservicenote2',`servicenote3` = '$editedservicenote3',`servicenote1date` = '$editedservicenote1date',`servicenote2date` = '$editedservicenote2date',`servicenote3date` = '$editedservicenote3date', `phpid` = '$editedphpid', `miles_in` = '$editedmiles_in', `miles_out` = '$editedmiles_out'
         WHERE `id` = '$editid';";

        $statement = $connection->prepare($sql);
        $statement->execute($editdata);
        echo "<meta http-equiv='refresh' content='0'>";

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['submitedit']) && $statement) { ?>
    <blockquote><?php echo $incommingid; ?> successfully edited.</blockquote>

<?php } ?>

<?php 

if (isset($_POST['submiteditandprint'])) {

    

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
            $editedvin                              = $_POST['vin'];
            $editedfirstname                        = $_POST['firstname'];
            $editedlastname                         = $_POST['lastname'];
            $editedemail                            = $_POST['email'];
            $editedphone                            = $_POST['phone'];
            $editedyear                             = $_POST['year'];
            $editedlocation                         = $_POST['location'];
            $editedstatus                           = $_POST['status'];
            $editedmake                             = $_POST['make'];
            $editedmodel                            = $_POST['model'];
            $editeddue_date                         = $_POST['due_date'];
            $editeddescription                      = $_POST['description'];
            $editedservicenote1                     = $_POST['servicenote1'];
            $editedservicenote2                     = $_POST['servicenote2'];
            $editedservicenote3                     = $_POST['servicenote3'];
            $editedservicenote1date                 = $_POST['servicenote1date'];
            $editedservicenote2date                 = $_POST['servicenote2date'];
            $editedservicenote3date                 = $_POST['servicenote3date'];
            $editedphpid                            = $_POST['phpid'];
            $editedmiles_in                         = $_POST['miles_in'];
            $editedmiles_out                        = $_POST['miles_out'];
            

         $sql = "UPDATE `tickets` SET `vin` = '$editedvin', `firstname` = '$editedfirstname', `lastname` = '$editedlastname', `email` = '$editedemail', `phone` = '$editedphone', `year` = '$editedyear', `location` = '$editedlocation', `status` = '$editedstatus', `make` = '$editedmake', `model` = '$editedmodel', `due_date` = '$editeddue_date', `description` = '$editeddescription', `servicenote1` = '$editedservicenote1',`servicenote2` = '$editedservicenote2',`servicenote3` = '$editedservicenote3',`servicenote1date` = '$editedservicenote1date',`servicenote2date` = '$editedservicenote2date',`servicenote3date` = '$editedservicenote3date', `phpid` = '$editedphpid', `miles_out` = '$editedmiles_out',`miles_in` = '$editedmiles_in'
         WHERE `id` = '$editid';";

        $statement = $connection->prepare($sql);
        $statement->execute($editdata);
        header("Location: print.php?editid=$incommingid");


    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

?>

<h2>Edit a ticket</h2>


<div class="container">
        <form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-25">
            <label for="vin">Ticket ID</label>
        </div>
        <div class="col-75">
            <input type="text" id="ticketid" value="<?php echo $editid; ?>" name="ticketid" maxlength="255" required/>
        </div>
    </div>   
    <div class="row">
        <div class="col-25">
            <label for="vin">VIN</label>
        </div>
        <div class="col-75">
            <input type="text" id="vin" value="<?php echo $editvin; ?>" name="vin" maxlength="17" required/>
        </div>
    </div>    
    <div class="row">    
        <div class="col-25">
            <label for="firstname">First Name</label>
        </div>
        <div class="col-75">
            <input type="text" name="firstname" id="firstname" value="<?php echo $editfirstname; ?>" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="lastname">Last Name</label>
        </div>
        <div class="col-75">
            <input type="text" name="lastname" id="lastname" value="<?php echo $editlastname; ?>"required>
        </div>
    </div>  

    <div class="row">     
        <div class="col-25">
            <label for="make">Make</label>
        </div>
        <div class="col-75">
            <input type="text" name="make" id="make" value="<?php echo $editmake; ?>"required>
        </div>
    </div>

        <div class="row">     
        <div class="col-25">
            <label for="model">Model</label>
        </div>
        <div class="col-75">
            <input type="text" name="model" id="model" value="<?php echo $editmodel; ?>"required>
        </div>
    </div>

    <div class="row">     
        <div class="col-25">
            <label for="year">Year</label>
        </div>
        <div class="col-75">
            <input type="text" name="year" id="year" value="<?php echo $edityear; ?>"required>
        </div>
    </div>


    <div class="row">     
        <div class="col-25">
            <label for="email">Email Address</label>
        </div>
        <div class="col-75">
            <input type="text" name="email" id="email" value="<?php echo $editemail; ?>">
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="phone">Phone Number</label>
        </div>
        <div class="col-75">
            <input type="text" name="phone" id="phone" value="<?php echo $editphone; ?>" required> 
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">   
            <label for="location">Location</label>
        </div>
        <div class="col-75">
            <select name="location" id="location" required>
            <option value="<?php echo $editlocation; ?>" selected><?php echo $editlocation; ?></option>
                    <option value="Out Front">Showroom</option>
                    <option value="Quonset Hut">Boat Shop</option>
                    <option value="Shop">Mechanics Shop</option>
                    <option value="At Harley">At Harley</option>
                    <option value="Audio Bay">Audio Bay</option>
                    <option value="Audio Bay">Body Shop</option>
            </select><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="due_date">Due Date</label>
        </div>
        <div class="col-25">
            <input type="date" name="due_date" value="<?php echo $editduedate; ?>" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="status">Status</label>
        </div>
        <div class="col-75">
            <select name="status" required>
            <option value="<?php echo $editstatus; ?>" selected><?php echo $editstatus; ?></option>
                    <option value="Checked In">Checked In</option>
                    <option value="Waiting on Parts">Waiting on Parts</option>
                    <option value="In Paint">In Paint</option>
                    <option value="In Service">In Service</option>
                    <option value="Waiting on Lift">Waiting on Lift</option>
                    <option value="Awaiting Deposit">Awaiting Deposit</option>
                    <option value="Ready For Pickup">Ready For Pickup</option>
                    <option value="Complete">Complete</option>
                    <option value="On Lift">On Lift</option>
                    <option value="Waiting on Test Ride">Waiting on Test Ride</option>
                    <option value="Waiting on Quote">Waiting on Quote</option>
                    <option value="Storage">Storage</option>
                    <option value="Consignment">Consignment</option>
            </select><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image1">Odometer</label>
        </div>
        <div class="col-25">
            <a href="/public<?php echo $editimage1; ?>" target="_blank">Click for picture</a>
        </div>
        <div class="col-25">
            
        </div>
    </div>    
<div class="row">     
        <div class="col-25">
                <label for="image2">VIN Plate</label>
        </div>
        <div class="col-25">
            <a href="/public<?php echo $editimage2; ?>" target="_blank">Click for picture</a>
        </div>
        <div class="col-25">
            
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                <label for="image3">Left Side</label>
        </div>
        <div class="col-25">
            <a href="/public<?php echo $editimage3; ?>" target="_blank">Click for picture</a>
        </div>
        <div class="col-25">
            
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                <label for="image4">Front</label>
        </div>
        <div class="col-25">
            <a href="/public<?php echo $editimage4; ?>" target="_blank">Click for picture</a>
        </div>
        <div class="col-25">
            
        </div>
    </div>
        <div class="row">     
        <div class="col-25">
                <label for="image5">Right Side</label>
        </div>
        <div class="col-25">
            <a href="/public<?php echo $editimage5; ?>" target="_blank">Click for picture</a>
        </div>
        <div class="col-25">
            
        </div>
    </div>
        <div class="row">     
        <div class="col-25">
                <label for="image6">Back</label>
        </div>
        <div class="col-25">
            <a href="/public<?php echo $editimage6; ?>" target="_blank">Click for picture</a>
        </div>
        <div class="col-25">
            
        </div>
    </div>
        <div class="row">
        <div class="col-25">
            <label for ="description">Description of Issue/Upgrade</label>
        </div>
        <div class="col-75">
            <textarea name="description" id="description" rows="10" cols="80" required><?php echo $editdescription; ?></textarea><br />
        </div>
    </div>

    <div class="row">     
        <div class="col-25">
                <label for="servicenotes">Service Notes</label>
        </div>
        <div class="col-75">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
                <label for="servicenotes">Service note #1</label>
        </div>
        <div class="col-75">
            <input type="date" name="servicenote1date" value="<?php echo $editservicenote1date; ?>">
            <textarea name="servicenote1" id="servicenote1" rows="5" cols="80" ><?php echo $editservicenote1; ?></textarea><br />
        </div>
            </div>
    <div class="row">
                 <div class="col-25">
                <label for="servicenotes">Service note #2</label>
        </div>
             <div class="col-75">
            <input type="date" name="servicenote2date" value="<?php echo $editservicenote2date; ?>">
            
            <textarea name="servicenote2" id="servicenote2" rows="5" cols="80" ><?php echo $editservicenote2; ?></textarea><br />
        </div>
               
            </div>
    <div class="row">
                 <div class="col-25">
                <label for="servicenotes">Service note #3</label>
        </div>
             <div class="col-75">
            <input type="date" name="servicenote3date" value="<?php echo $editservicenote3date; ?>">
           
            <textarea name="servicenote3" id="servicenote3" rows="5" cols="80" ><?php echo $editservicenote3; ?></textarea><br />
        
    </div>
            
    <div class="row">     
        <div class="col-25">
            <label for="phpid">PHP ID</label>
        </div>
        <div class="col-75">
            <input type="text" name="phpid" id="phpid" value="<?php echo $editphpid; ?>"required>
        </div>
    </div>

       <div class="row">     
        <div class="col-25">
            <label for="miles">Miles in</label>
        </div>
        <div class="col-75">
            <input type="text" name="miles_in" id="miles_in" value="<?php echo $editmiles_in; ?>"required>
        </div>
    </div>

    <div class="row">     
        <div class="col-25">
            <label for="miles">Miles out</label>
        </div>
        <div class="col-75">
            <input type="text" name="miles_out" id="miles_out" value="<?php echo $editmiles_out; ?>"required>
        </div>
    </div>

  
    <div class="row">
        <input type="submit" name="submitedit" value="Submit Edit">
        <input type="submit" name="submiteditandprint" value="Submit Edit and Print">
    </div>
        </form>
</div>

<?php require "templates/footer.php"; ?>
