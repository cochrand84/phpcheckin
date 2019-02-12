

<head>
	<link rel="stylesheet" href="css/print.css">
	<script type="text/javascript">
 window.onload = function() { window.print(); }
</script>
	</head>

<?php

/**
 * Use an HTML form to create a new entry in the
 * tickets table.
 *
 */

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


                    $oilchangeckd = "";
                    if ($editoilchange == 'true'){
                        $oilchangeckd = "red";
                    } else {
                        $oilchangeckd = "";
                    }
                    $fullserviceckd = "";
                    if ($editfullservice == 'true'){
                        $fullserviceckd = "red";
                    } else {
                        $fullserviceckd = "";
                    }
                    $otherserviceckd = "";
                    if ($editotherservice == 'true'){
                        $otherserviceckd = "red";
                    } else {
                        $otherserviceckd = "";
                    }
                    


                    $fronttirechangeckd = "";
                    if ($editfronttirechange == 'true'){
                        $fronttirechangeckd = "red";
                    } else {
                        $fronttirechangeckd = "";
                    }
                    $reartirechangeckd = "";
                    if ($editreartirechange == 'true'){
                        $reartirechangeckd = "red";
                    } else {
                        $reartirechangeckd = "";
                    }
                    $audiotroubleshootingckd = "";
                    if ($editaudiotroubleshooting == 'true'){
                        $audiotroubleshootingckd = "red";
                    } else {
                        $audiotroubleshootingckd = "";
                    }
                    


                    $fullaudiosystemckd = "";
                    if ($editfullaudiosystem == 'true'){
                        $fullaudiosystemckd = "red";
                    } else {
                        $fullaudiosystemckd = "";
                    }
                    $audioupgradeckd = "";
                    if ($editaudioupgrade == 'true'){
                        $audioupgradeckd = "red";
                    } else {
                        $audioupgradeckd = "";
                    }

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
            $editedemail                            = $_POST['email'];
            $editedphone                            = $_POST['phone'];
            $editedyear                             = $_POST['ModelYear'];
            $editedlocation                         = $_POST['location'];
            $editedstatus                           = $_POST['status'];
            $editedmake                             = $_POST['Make'];
            $editedmodel                            = $_POST['Model'];
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
            

         $sql = "UPDATE `tickets` SET `firstname` = '$editedfirstname', `lastname` = '$editedlastname', `email` = '$editedemail', `phone` = '$editedphone', `year` = '$editedyear', `location` = '$editedlocation', `status` = '$editedstatus', `make` = '$editedmake', `model` = '$editedmodel', `due_date` = '$editeddue_date', `description` = '$editeddescription', `oilchange` = '$editedoilchange', `fullservice` = '$editedfullservice', `otherservice` = '$editedotherservice', `otherservicedescription` = '$editedotheraudiodescription', `fronttirechange` = '$editedfronttirechange', `reartirechange` = '$editedreartirechange', `audiotroubleshooting` = '$editedaudiotroubleshooting', `otheraudiodescription` = '$editedotheraudiodescription', `fullaudiosystem` = '$editedfullaudiosystem', `audioupgrade` = '$editedaudioupgrade'
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
<h2>Ticket # <?php echo $editid; ?></h2>


    <div class="row">
        <div class="col1">
            Ticket ID
        </div>
        <div class="col2">
            <?php echo $editid; ?>
        </div>
    </div>   


    <div class="row">
        <div class="col1">
            VIN
        </div>
        <div class="col2">
            <?php echo $editvin; ?>
        </div>
    </div>   


    <div class="row">    
        <div class="col1">
            First Name
        </div>
        <div class="col2">
            <?php echo $editfirstname; ?>
        </div>
    </div>  


    <div class="row">     
        <div class="col1">
            Last Name
        </div>
        <div class="col2">
            <?php echo $editlastname; ?>
        </div>
    </div>    


    <div class="row">     
        <div class="col1">
            Email Address
        </div>
        <div class="col2">
            <?php echo $editemail; ?>
        </div>
    </div>  


    <div class="row">     
        <div class="col1">
            Phone Number
        </div>
        <div class="col2">
            <?php echo $editphone; ?>
        </div>
    </div>    


    <div class="row">     
        <div class="col1">   
            Location
        </div>
        <div class="col2">
            <?php echo $editlocation; ?>
        </div>
    </div>   


    <div class="row">     
        <div class="col1">
            Due Date
        </div>
        <div class="col2">
            <?php echo $editduedate; ?>
        </div>
    </div>  


    <div class="row">     
        <div class="col1">
            Status
        </div>
        <div class="col2">
            <?php echo $editstatus; ?>
        </div>
    </div>  

    </br>
    <div class="row">     
        <div class="col1">
                Image 1<img src="view.php?rand=<?php echo $editimage1; ?>" alt="<?php echo $editimage1; ?>" height="100" width="100">
        </div>
        <div class="col2">
            Image 2<img src="view.php?rand=<?php echo $editimage2; ?>" alt="<?php echo $editimage2; ?>" height="100" width="100">
        </div>

    </div>    
    </br>
    <div class="row">     
        <div class="col1">
                Image 3<img src="view.php?rand=<?php echo $editimage3; ?>" alt="<?php echo $editimage3; ?>" height="100" width="100">
        </div>
        <div class="col2">
            Image 4<img src="view.php?rand=<?php echo $editimage4; ?>" alt="<?php echo $editimage4; ?>" height="100" width="100">
        </div>

    </div>

</div>
        <div class="row">
        <div class="col1">
            Description of Issue/Upgrade
        </div>
        <div class="col2">
            <?php echo $editdescription; ?>
        </div>
    </div>
    <div class="row">
    	<div class="col1">
    Services Requested
         </div>
         <div class="col2">
         	 </div>
     </div>
     <div class="row">
        <div class="col1">
                Mechanical
        </div>
        <div class="col2">
            Oil Change/Service
            <div style="color:<?php echo $oilchangeckd; ?>">Oil Change</div>
            <div style="color:<?php echo $fullserviceckd; ?>">Full Service</div>
            <div style="color:<?php echo $otherserviceckd; ?>">Other Service</div>
            <?php echo $editotherservicedescription; ?>
            Tires
            <div style="color:<?php echo $fronttirechangeckd; ?>">Front Tire Change</div>
            <div style="color:<?php echo $reartirechangeckd; ?>">Rear Tire Change</div>
        </div>
    </div>
    <div class="row">     
        <div class="col1">
                Audio
        </div>
        <div class="col2">
            Audio Troubleshooting
            <div style="color:<?php echo $audiotroubleshootingckd; ?>">Audio Troubleshooting</div>
            <?php echo $editotheraudiodescription; ?>
            Audio Upgrade
            <div style="color:<?php echo $fullaudiosystemckd; ?>">Full Audio System</div>
            <div style="color:<?php echo $audioupgradeckd; ?>">Audio Upgrade</div>
        </div>
    </div>
    <div class="row">
        </div>
        </form>
</div>
</br>
<div class="row">
        <div class="col1">
Ticket Number:

        </div>
        <div class="col2">
<img alt="Ticket Number" src="barcode.php?text=<?php echo $editid; ?>&print=true" />
        </div>
    </div>
     <div class="row">     
        <div class="col1">
Vin Number:

   </div>
        <div class="col2">
<img alt="Ticket Number" src="barcode.php?text=<?php echo $editvin; ?>&print=true" />

        </div>
    </div>
    </html>


