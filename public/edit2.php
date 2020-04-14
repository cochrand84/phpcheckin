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
                    $editid                         = $row["id"]; 
                    $editvin                        = $row["vin"];
                    $editfirstname                  = $row["firstname"]; 
                    $editlastname                   = $row["lastname"]; 
                    $editemail                      = $row["email"]; 
                    $edityear                       = $row["year"]; 
                    $editmake                     = $row["make"];
                    $editmodel                     = $row["model"];
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

if (isset($_POST['submitedit'])) {


        $image5 = $_FILES['image5']['tmp_name'];
        $imgContent5 = addslashes(file_get_contents($image5));      

        $db = new mysqli($host, $username, $password, $dbname);
        

        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand5 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent5', '$dataTime', '$rand5')");
        if($insert){
            
        }else{
            echo "File upload failed, please try again.";
        } 
    

        $image6 = $_FILES['image6']['tmp_name'];
        $imgContent6 = addslashes(file_get_contents($image6));
     
        $db = new mysqli($host, $username, $password, $dbname);
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand2 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent6', '$dataTime', '$rand6')");
        if($insert){
            
        }else{
            echo "File upload failed, please try again.";
        } 


   
        $image7 = $_FILES['image7']['tmp_name'];
        $imgContent7 = addslashes(file_get_contents($image7));
     
        $db = new mysqli($host, $username, $password, $dbname);
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand7 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent7', '$dataTime', '$rand7')");
        if($insert){
            
        }else{
            echo "File upload failed, please try again.";
        } 
    

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
            $editedoilchange                        = $_POST['oilchange'];
            $editedfullservice                      = $_POST['fullservice'];
            $editedotherservice                     = $_POST['otherservice'];
            $editedotherservicedescription          = $_POST['otherservicedescription'];
            $editedfronttirechange                  = $_POST['fronttirechange'];
            $editedreartirechange                   = $_POST['reartirechange'];
            $editedaudiotroubleshooting             = $_POST['audiotroubleshooting'];
            $editedotheraudiodescription            = $_POST['otheraudiodescription'];
            $editedfullaudiosystem                  = $_POST['fullaudiosystem'];
            $editedaudioupgrade                     = $_POST['audioupgrade'];
            $editedservicenote1                     = $_POST['servicenote1'];
            $editedservicenote2                     = $_POST['servicenote2'];
            $editedservicenote3                     = $_POST['servicenote3'];
            $editedservicenote1date                 = $_POST['servicenote1date'];
            $editedservicenote2date                 = $_POST['servicenote2date'];
            $editedservicenote3date                 = $_POST['servicenote3date'];
            $editedserviceimage5                    = $rand5;
            $editedserviceimage6                    = $rand6;
            $editedserviceimage7                    = $rand7;
            $editedphpid                            = $_POST['phpid'];
            

         $sql = "UPDATE `tickets` SET `vin` = '$editedvin', `firstname` = '$editedfirstname', `lastname` = '$editedlastname', `email` = '$editedemail', `phone` = '$editedphone', `year` = '$editedyear', `location` = '$editedlocation', `status` = '$editedstatus', `make` = '$editedmake', `model` = '$editedmodel', `due_date` = '$editeddue_date', `description` = '$editeddescription', `oilchange` = '$editedoilchange', `fullservice` = '$editedfullservice', `otherservice` = '$editedotherservice', `otherservicedescription` = '$editedotheraudiodescription', `fronttirechange` = '$editedfronttirechange', `reartirechange` = '$editedreartirechange', `audiotroubleshooting` = '$editedaudiotroubleshooting', `otheraudiodescription` = '$editedotheraudiodescription', `fullaudiosystem` = '$editedfullaudiosystem', `audioupgrade` = '$editedaudioupgrade', `servicenote1` = '$editedservicenote1',`servicenote2` = '$editedservicenote2',`servicenote3` = '$editedservicenote3',`servicenote1date` = '$editedservicenote1date',`servicenote2date` = '$editedservicenote2date',`servicenote3date` = '$editedservicenote3date', `image5` = '$editedserviceimage5', `image6` = '$editedserviceimage6', `image7` = '$editedserviceimage7', `phpid` = '$editedphpid'
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

<?php 

if (isset($_POST['submiteditandprint'])) {


        $image5 = $_FILES['image5']['tmp_name'];
        $imgContent5 = addslashes(file_get_contents($image5));      

        $db = new mysqli($host, $username, $password, $dbname);
        

        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand5 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent5', '$dataTime', '$rand5')");
        if($insert){
            
        }else{
            echo "File upload failed, please try again.";
        } 
    

        $image6 = $_FILES['image6']['tmp_name'];
        $imgContent6 = addslashes(file_get_contents($image6));
     
        $db = new mysqli($host, $username, $password, $dbname);
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand2 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent6', '$dataTime', '$rand6')");
        if($insert){
            
        }else{
            echo "File upload failed, please try again.";
        } 


   
        $image7 = $_FILES['image7']['tmp_name'];
        $imgContent7 = addslashes(file_get_contents($image7));
     
        $db = new mysqli($host, $username, $password, $dbname);
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand7 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent7', '$dataTime', '$rand7')");
        if($insert){
            
        }else{
            echo "File upload failed, please try again.";
        } 
    

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
            $editedoilchange                        = $_POST['oilchange'];
            $editedfullservice                      = $_POST['fullservice'];
            $editedotherservice                     = $_POST['otherservice'];
            $editedotherservicedescription          = $_POST['otherservicedescription'];
            $editedfronttirechange                  = $_POST['fronttirechange'];
            $editedreartirechange                   = $_POST['reartirechange'];
            $editedaudiotroubleshooting             = $_POST['audiotroubleshooting'];
            $editedotheraudiodescription            = $_POST['otheraudiodescription'];
            $editedfullaudiosystem                  = $_POST['fullaudiosystem'];
            $editedaudioupgrade                     = $_POST['audioupgrade'];
            $editedservicenote1                     = $_POST['servicenote1'];
            $editedservicenote2                     = $_POST['servicenote2'];
            $editedservicenote3                     = $_POST['servicenote3'];
            $editedservicenote1date                 = $_POST['servicenote1date'];
            $editedservicenote2date                 = $_POST['servicenote2date'];
            $editedservicenote3date                 = $_POST['servicenote3date'];
            $editedserviceimage5                    = $rand5;
            $editedserviceimage6                    = $rand6;
            $editedserviceimage7                    = $rand7;
            $editedphpid                            = $_POST['phpid'];
            

         $sql = "UPDATE `tickets` SET `vin` = '$editedvin', `firstname` = '$editedfirstname', `lastname` = '$editedlastname', `email` = '$editedemail', `phone` = '$editedphone', `year` = '$editedyear', `location` = '$editedlocation', `status` = '$editedstatus', `make` = '$editedmake', `model` = '$editedmodel', `due_date` = '$editeddue_date', `description` = '$editeddescription', `oilchange` = '$editedoilchange', `fullservice` = '$editedfullservice', `otherservice` = '$editedotherservice', `otherservicedescription` = '$editedotheraudiodescription', `fronttirechange` = '$editedfronttirechange', `reartirechange` = '$editedreartirechange', `audiotroubleshooting` = '$editedaudiotroubleshooting', `otheraudiodescription` = '$editedotheraudiodescription', `fullaudiosystem` = '$editedfullaudiosystem', `audioupgrade` = '$editedaudioupgrade', `servicenote1` = '$editedservicenote1',`servicenote2` = '$editedservicenote2',`servicenote3` = '$editedservicenote3',`servicenote1date` = '$editedservicenote1date',`servicenote2date` = '$editedservicenote2date',`servicenote3date` = '$editedservicenote3date', `image5` = '$editedserviceimage5', `image6` = '$editedserviceimage6', `image7` = '$editedserviceimage7', `phpid` = '$editedphpid'
         WHERE `id` = '$editid';";

        $statement = $connection->prepare($sql);
        $statement->execute($editdata);
        echo "<meta http-equiv='refresh' content='0'>";

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['submiteditandprint']) && $statement) { ?>
    <blockquote><?php echo $_POST['id']; ?> successfully edited.</blockquote>
    <?php header("Location: print.php?editid=$_POST[id]");

} ?>

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

  
    <div class="row">
        <input type="submit" name="submitedit" value="Submit Edit">
        <input type="submit" name="submiteditandprint" value="Submit Edit and Print">
    </div>
        </form>
</div>

<?php require "templates/footer.php"; ?>
