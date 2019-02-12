

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


<div class="container">
        <form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-25">
            Ticket ID
        </div>
        <div class="col-75">
            <?php echo $editid; ?>
        </div>
    </div>   
    <div class="row">
        <div class="col-25">
            VIN
        </div>
        <div class="col-75">
            <?php echo $editvin; ?>
        </div>
    </div>    
    <div class="row">    
        <div class="col-25">
            First Name
        </div>
        <div class="col-75">
            <?php echo $editfirstname; ?>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            Last Name
        </div>
        <div class="col-75">
            <?php echo $editlastname; ?>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            Email Address
        </div>
        <div class="col-75">
            <?php echo $editemail; ?>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            Phone Number
        </div>
        <div class="col-75">
            <?php echo $editphone; ?>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">   
            Location
        </div>
        <div class="col-75">
            <?php echo $editlocation; ?>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            Due Date
        </div>
        <div class="col-25">
            <?php echo $editduedate; ?>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            Status
        </div>
        <div class="col-75">
            
            <?php echo $editstatus; ?>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                Image 1
        </div>
        <div class="col-25">
            <img src="view.php?rand=<?php echo $editimage1; ?>" alt="<?php echo $editimage1; ?>" height="100" width="100">
        </div>
        <div class="col-25">
            
        </div>
    </div>    
<div class="row">     
        <div class="col-25">
                Image 2
        </div>
        <div class="col-25">
            <img src="view.php?rand=<?php echo $editimage2; ?>" alt="<?php echo $editimage2; ?>" height="100" width="100">
        </div>
        <div class="col-25">
            
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                Image 3
        </div>
        <div class="col-25">
            <img src="view.php?rand=<?php echo $editimage3; ?>" alt="<?php echo $editimage3; ?>" height="100" width="100">
        </div>
        <div class="col-25">
            
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                Image 4
        </div>
        <div class="col-25">
            <img src="view.php?rand=<?php echo $editimage4; ?>" alt="<?php echo $editimage4; ?>" height="100" width="100">
        </div>
        <div class="col-25">
            
        </div>
    </div>
        <div class="row">
        <div class="col-25">
            Description of Issue/Upgrade
        </div>
        <div class="col-75">
            <?php echo $editdescription; ?>
        </div>
    </div>
    Services Requested
    <div class="row">     
        <div class="col-25">
                Mechanical
        </div>
        <div class="col-75">
            Oil Change/Service<br />
            <?php echo $oilchangeckd; ?>Oil Change<br />
            <?php echo $fullserviceckd; ?>Full Service<br />
            <?php echo $otherserviceckd; ?>Other Service<br />
            <?php echo $editotherservicedescription; ?><br />
            Tires<br />
            <?php echo $fronttirechangeckd; ?>Front Tire Change<br />
            <?php echo $reartirechangeckd; ?>Rear Tire Change<br />
        </div>
    </div>
    <div class="row">     
        <div class="col-25">
                Audio
        </div>
        <div class="col-75">
            Audio Troubleshooting<br />
            <?php echo $audiotroubleshootingckd; ?>Audio Troubleshooting<br />
            <?php echo $editotheraudiodescription; ?><br />
            Audio Upgrade<br />
            <?php echo $fullaudiosystemckd; ?>Full Audio System<br />
            <?php echo $audioupgradeckd; ?>Audio Upgrade<br />
        </div>
    </div>
    <div class="row">
        </div>
        </form>
</div>

Ticket Number:
<img alt="Ticket Number" src="barcode.php?text=<?php echo $editid; ?>&print=true" />


