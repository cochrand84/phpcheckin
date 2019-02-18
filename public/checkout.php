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
                    $edityear                       = $row["year"]; 
                    $editedmake                     = $row["Make"];
                    $editedmodel                    = $row["Model"];
                    $editservicenote1               = $row['servicenote1'];
                    $editservicenote2               = $row['servicenote2'];
                    $editservicenote3               = $row['servicenote3'];
                    $editservicenote1date           = $row['servicenote1date'];
                    $editservicenote2date           = $row['servicenote2date'];
                    $editservicenote3date           = $row['servicenote3date'];

         } 
        } else { 
        echo $_POST['status'];
     } 

if (isset($_POST['submitedit'])) {

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
            $editedvin                              = $_POST['vin'];
            $editedfirstname                        = $_POST['firstname'];
            $editedlastname                         = $_POST['lastname'];
            $editedyear                             = $_POST['ModelYear'];
            $editedmake                             = $_POST['Make'];
            $editedmodel                            = $_POST['Model'];
            $editedservicenote1                     = $_POST['servicenote1'];
            $editedservicenote2                     = $_POST['servicenote2'];
            $editedservicenote3                     = $_POST['servicenote3'];
            $editedservicenote1date                 = $_POST['servicenote1date'];
            $editedservicenote2date                 = $_POST['servicenote2date'];
            $editedservicenote3date                 = $_POST['servicenote3date'];
            

         $sql = "UPDATE `tickets` SET `firstname` = '$editedfirstname', `lastname` = '$editedlastname', `year` = '$editedyear', `location` = '$editedlocation', `make` = '$editedmake', `model` = '$editedmodel', `servicenote1` = '$editedservicenote1',`servicenote2` = '$editedservicenote2',`servicenote3` = '$editedservicenote3',`servicenote1date` = '$editedservicenote1date',`servicenote2date` = '$editedservicenote2date',`servicenote3date` = '$editedservicenote3date'
         WHERE `id` = '$editid';";

        $statement = $connection->prepare($sql);
        $statement->execute($editdata);
        echo "<meta http-equiv='refresh' content='0'>";

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['submitedit']) && $statement) { ?>
    <blockquote><?php echo $_POST['id']; ?> successfully edited.</blockquote>
<?php } ?>
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
    </div>
    <div class="row">
        <input type="submit" name="submitedit" value="Submit Edit">
    </div>
        </form>
</div>

<?php require "templates/footer.php"; ?>
