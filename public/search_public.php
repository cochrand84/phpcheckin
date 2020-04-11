
<link rel="stylesheet" href="css/publicstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<?php

$_GET['ticketid'];
$incommingid = $_GET['ticketid'];
$_GET['lastname'];
$incommingln = $_GET['lastname'];

try  {
        
        require "../config.php"; 
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM `tickets` WHERE (ID = $incommingid AND lastname = '$incommingln')";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo "Could not find a Ticket with that name and ticket id number, please try again";
        include "display_public.php";
    }

if ($result && $statement->rowCount() > 0) {
        foreach ($result as $row) { 
                    $editid                         = $row["id"]; 
                    $editfirstname                  = $row["firstname"]; 
                    $editlastname                   = $row["lastname"]; 
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
                    $editduedate                    = $row["due_date"];
                    $editdescription                = $row["description"];
                    $editoilchange                  = $row['oilchange'];
                    $editfullservice                = $row['fullservice'];
                    $editotherservice               = $row['otherservice'];
                    $editotherservicedescription    = $row['otherservicedescription'];
                    $editfronttirechange            = $row['fronttirechange'];
                    $editreartirechange             = $row['reartirechange'];
                    $editaudiotroubleshooting       = $row['audiotroubleshooting'];
                    $editotheraudiodescription      = $row['otheraudiodescription'];
                    $editfullaudiosystem            = $row['fullaudiosystem'];
                    $editaudioupgrade               = $row['audioupgrade'];
                    $editservicenote1             = $row['servicenote1'];
                    $editservicenote2             = $row['servicenote2'];
                    $editservicenote3             = $row['servicenote3'];
                    $editservicenote1date         = $row['servicenote1date'];
                    $editservicenote2date         = $row['servicenote2date'];
                    $editservicenote3date         = $row['servicenote3date'];
                    $editphpid                         = $row['phpid'];



                    $oilchangeckd = "";
                    if ($editoilchange == 'true'){
                        $oilchangeckd = "checked";
                    } else {
                        $oilchangeckd = "";
                    }
                    $fullserviceckd = "";
                    if ($editfullservice == 'true'){
                        $fullserviceckd = "checked";
                    } else {
                         $fullserviceckd = "";
                    }
                    $otherserviceckd = "";
                    if ($editotherservice == 'true'){
                        $otherserviceckd = "checked";
                    } else {
                        $otherserviceckd = "";
                    }
                    


                    $fronttirechangeckd = "";
                    if ($editfronttirechange == 'true'){
                        $fronttirechangeckd = "checked";
                    } else {
                        $fronttirechangeckd = "";
                    }
                    $reartirechangeckd = "";
                    if ($editreartirechange == 'true'){
                        $reartirechangeckd = "checked";
                    } else {
                        $reartirechangeckd = "";
                    }
                    $audiotroubleshootingckd = "";
                    if ($editaudiotroubleshooting == 'true'){
                        $audiotroubleshootingckd = "checked";
                    } else {
                        $audiotroubleshootingckd = "";
                    }
                    


                    $fullaudiosystemckd = "";
                    if ($editfullaudiosystem == 'true'){
                        $fullaudiosystemckd = "checked";
                    } else {
                        $fullaudiosystemckd = "";
                    }
                    $audioupgradeckd = "";
                    if ($editaudioupgrade == 'true'){
                        $audioupgradeckd = "checked";
                    } else {
                        $audioupgradeckd = "";
                    }

         } 
        } else { 
        echo $_POST['status'];
     } 



if (isset($_POST['submitedit']) && $statement) { ?>
    <blockquote><?php echo $_POST['id']; ?> successfully edited.</blockquote>
<?php } ?>
<h2>Your bikes status:</h2>


<div class="container">
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
                    <option value="Out Front">Out Front</option>
                    <option value="Quonset Hut">Quonset Hut</option>
                    <option value="Shop">Shop</option>
                    <option value="At Harley">At Harley</option>
                    <option value="Audio Bay">Audio Bay</option>
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
            </select><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image1">Image 1</label>
        </div>
        <div class="col-25">
            <a href="view.php?rand=<?php echo $editimage1; ?>">Click for picture</a>
        </div>
        <div class="col-25">
            
        </div>
    </div>    
<div class="row">     
        <div class="col-25">
                <label for="image1">Image 2</label>
        </div>
        <div class="col-25">
            <a href="view.php?rand=<?php echo $editimage2; ?>">Click for picture</a>
        </div>
        <div class="col-25">
            
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                <label for="image3">Image 3</label>
        </div>
        <div class="col-25">
            <a href="view.php?rand=<?php echo $editimage3; ?>">Click for picture</a>
        </div>
        <div class="col-25">
            
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                <label for="image4">Image 4</label>
        </div>
        <div class="col-25">
            <a href="view.php?rand=<?php echo $editimage4; ?>">Click for picture</a>
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
    Services Requested
    <div class="row">     
        <div class="col-25">
                <label for="mechanical">Mechanical</label>
        </div>
        <div class="col-75">
            Oil Change/Service<br />
            <input type="checkbox" name="oilchange" id="oilchange" value="true" <?php echo $oilchangeckd; ?>/>Oil Change<br />
            <input type="checkbox" name="fullservice" id="fullservice" value="true"<?php echo $fullserviceckd; ?>/>Full Service<br />
            <input type="checkbox" name="otherservice" id="otherservice" value="true"<?php echo $otherserviceckd; ?>/>Other Service<br />
            <textarea name="otherservicedescription" id="otherservicedescription" rows="5" cols="80" ><?php echo $editotherservicedescription; ?></textarea><br />
            Tires<br />
            <input type="checkbox" name="fronttirechange" id="fronttirechange" value="true"<?php echo $fronttirechangeckd; ?>/>Front Tire Change<br />
            <input type="checkbox" name="reartirechange" id="reartirechange" value="true"<?php echo $reartirechangeckd; ?>/>Rear Tire Change<br />
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                <label for="audio">Audio</label>
        </div>
        <div class="col-75">
            Audio Troubleshooting<br />
            <input type="checkbox" name="audiotroubleshooting" id="audiotroubleshooting" value="true"<?php echo $audiotroubleshootingckd; ?>/>Audio Troubleshooting<br />
            <textarea name="otheraudiodescription" id="otheraudiodescription" rows="5" cols="80" ><?php echo $editotheraudiodescription; ?></textarea><br />
            Audio Upgrade<br />
            <input type="checkbox" name="fullaudiosystem" id="fullaudiosystem" value="true"<?php echo $fullaudiosystemckd; ?>/>Full Audio System<br />
            <input type="checkbox" name="audioupgrade" id="audioupgrade" value="true"<?php echo $audioupgradeckd; ?>/>Audio Upgrade<br />
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
        <div class="col-25">
                <label for="image5">Image 5</label>
        </div>
        <div class="col-75">
            <input type="file" name="image5" id="image5"/><br />
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
                <div class="col-25">
                <label for="image6">Image 6</label>
        </div>
        <div class="col-75">
            <input type="file" name="image6" id="image6"/><br />
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
                <div class="col-25">
                <label for="image7">Image 7</label>
        </div>
        <div class="col-75">
            <input type="file" name="image7" id="image7"/><br />
        </div>
    </div>
            
    <div class="row">     
        <div class="col-25">
            <label for="phpid">PHP ID</label>
        </div>
        <div class="col-75">
            <input type="text" name="phpid" id="phpid" value="<?php echo $editphpid; ?>"required>
        </div>
    </div>        
</div>
