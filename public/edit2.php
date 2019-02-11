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
                 $editid = $row["id"]; 
                 $editvin = $row["vin"];
                 $editfirstname = $row["firstname"]; 
                 $editlastname = $row["lastname"]; 
                 $editemail = $row["email"]; 
                 $edityear = $row["year"]; 
                 $editlocation = $row["location"]; 
                 $editdate = $row["date"]; 
                 $editstatus = $row["status"];
                 $editphone = $row["phone"];
                 $editimage1 =  $row["image1"];
                 $editimage2 =  $row["image2"];
                 $editimage3 =  $row["image3"];
                 $editimage4 =  $row["image4"];
                 $editduedate = $row["due_date"];
                 $editdescription = $row["description"];
            
         } 
        } else { 
        echo $_POST['status'];
     } 

if (isset($_POST['submitedit'])) {

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
            $editedvin                      = $vinuppercase;
            $editedfirstname                = $_POST['firstname'];
            $editedphone                    = $_POST['phone'];

         $sql = "UPDATE tickets ". "SET vin = $editedvin, firstname = $editedfirstname, phone = $editedphone ". "WHERE id = $editid";

        $statement = $connection->prepare($sql);
        $statement->execute($editdata);
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
            <input type="text" name="location" id="location" value="<?php echo $editlocation; ?>" >
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
            </select><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image1">Image 1</label>
        </div>
        <div class="col-25">
            <a href="view.php?rand=<?php echo $editimage1; ?>"><img src="view.php?rand=<?php echo $editimage1; ?>" alt="<?php echo $editimage1; ?>" height="100" width="100"></a>
        </div>
        <div class="col-25">
            <input type="file" name="image1" id="image1" /><br />
        </div>
    </div>    
<div class="row">     
        <div class="col-25">
                <label for="image1">Image 2</label>
        </div>
        <div class="col-25">
            <a href="view.php?rand=<?php echo $editimage2; ?>"><img src="view.php?rand=<?php echo $editimage2; ?>" alt="<?php echo $editimage2; ?>" height="100" width="100"></a>
        </div>
        <div class="col-25">
            <input type="file" name="image2" id="image2" /><br />
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                <label for="image3">Image 3</label>
        </div>
        <div class="col-25">
            <a href="view.php?rand=<?php echo $editimage3; ?>"><img src="view.php?rand=<?php echo $editimage3; ?>" alt="<?php echo $editimage3; ?>" height="100" width="100"></a>
        </div>
        <div class="col-25">
            <input type="file" name="image3" id="image3" /><br />
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                <label for="image4">Image 4</label>
        </div>
        <div class="col-25">
            <a href="view.php?rand=<?php echo $editimage4; ?>"><img src="view.php?rand=<?php echo $editimage4; ?>" alt="<?php echo $editimage4; ?>" height="100" width="100"></a>
        </div>
        <div class="col-25">
            <input type="file" name="image4" id="image4" /><br />
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
        <input type="submit" name="submitedit" value="Submit Edit">
    </div>
        </form>
</div>

<?php require "templates/footer.php"; ?>
