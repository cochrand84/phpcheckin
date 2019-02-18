

<head>
	<link rel="stylesheet" href="css/print.css">
	<script type="text/javascript">
 window.onload = function() { window.print(); }
</script>
	</head>

<?php
include "templates/password_protect.php"; 

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

<table style="width:100%">
	<tr>
		
            <td>Ticket ID</td>

            <td><?php echo $editid; ?></td>

            <td>VIN</td>

            <td><?php echo $editvin; ?></td>
</tr>
            <tr>

            <td>First Name</td>

            <td><?php echo $editfirstname; ?></td>

            <td>Last Name</td>

            <td><?php echo $editlastname; ?></td>
            </tr>
            <tr>

            <td>Email Address</td>

            <td><?php echo $editemail; ?></td>

            <td>Phone Number</td>

            <td><?php echo $editphone; ?></td>
            </tr>
            <tr>
 
            <td>Location</td>

            <td><?php echo $editlocation; ?></td>
 
            <td>Due Date</td>

            <td><?php echo $editduedate; ?></td>
            </tr>
            <tr>

            <td>Status</td>

            <td><?php echo $editstatus; ?></td>
</tr>
            <tr>
            <td>Image 1</td>
            <td><img src="view.php?rand=<?php echo $editimage1; ?>" alt="<?php echo $editimage1; ?>" height="100" width="100"></td>

            <td>Image 2</td>
            <td><img src="view.php?rand=<?php echo $editimage2; ?>" alt="<?php echo $editimage2; ?>" height="100" width="100"></td>
</tr>
            <td><tr>
            <td>Image 3</td>
            <td><img src="view.php?rand=<?php echo $editimage3; ?>" alt="<?php echo $editimage3; ?>" height="100" width="100"></td>

            <td>Image 4</td>
            <td><img src="view.php?rand=<?php echo $editimage4; ?>" alt="<?php echo $editimage4; ?>" height="100" width="100"></td>
            </tr>
            </table>
<table>
            <tr>
            	<th>
            	</th>
            	<th>
            	</th>
            	<th>
            	</th>
            </tr>
            <tr>

            <td>Description of Issue/Upgrade</td>
</tr>
<tr>
            <td><?php echo $editdescription; ?></td>
</tr>

            </table></br>
<table>
            <tr>
    <td>Services Requested</td>
</tr>
            <tr>
            <td>Mechanical</td>
</tr><tr>
            <td>Oil Change/Service</td>
            <td><div style="color:<?php echo $oilchangeckd; ?>">Oil Change</div></td>
            <td><div style="color:<?php echo $fullserviceckd; ?>">Full Service</div></td>
            <td><div style="color:<?php echo $otherserviceckd; ?>">Other Service</div></td>
        </tr>
        <tr>
            <td>Other Services Description:</td>
        </tr>
	
        <tr>
            <td><?php echo $editotherservicedescription; ?></td>
            </tr></br><tr>
            <td>Tires</td>
            <td><div style="color:<?php echo $fronttirechangeckd; ?>">Front Tire Change</div></td>
            <td><div style="color:<?php echo $reartirechangeckd; ?>">Rear Tire Change</div></td>
</tr>
            <tr>
            <td>Audio</td>
</tr><tr>
            <td>Audio Troubleshooting</td>
            <td><div style="color:<?php echo $audiotroubleshootingckd; ?>">Audio Troubleshooting</div></td>
	<td>Audio Upgrade</td>
            <td><div style="color:<?php echo $fullaudiosystemckd; ?>">Full Audio System</div></td>
            <td><div style="color:<?php echo $audioupgradeckd; ?>">Audio Upgrade</div></td>
            </tr>
<tr>
            <td>Other Audio Description:</td>
            </tr><tr>
            <td><?php echo $editotheraudiodescription; ?></td>
            
</tr></br>
            <tr>
            </br>
			<td>Ticket Number:</td>

			<td><img alt="Ticket Number" src="barcode.php?text=<?php echo $editid; ?>&print=true" /></td>

			<td>Vin Number:</td>

			<td><img alt="Ticket Number" src="barcode.php?text=<?php echo $editvin; ?>&print=true" /></td>

</tr>
    </table>
    </html>


