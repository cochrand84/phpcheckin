

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
                    $editphpid                      = $row['phpid'];
                    $edityear                       = $row["year"]; 
                    $editmake                       = $row["make"];
                    $editmodel                      = $row["model"];


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


?>
<h2>Ticket # <?php echo $editid; ?></h2>

<table id="table-ticket">
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
        <td>Year</td>
        <td><?php echo $edityear; ?></td>
        <td>Make</td>
        <td><?php echo $editmake; ?></td>
    </tr>
    <tr>
        <td>Model</td>
        <td><?php echo $editmodel; ?></td>
        <td></td>
        <td></td>
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
        <td>Php POS ID</td>
        <td><?php echo $editphpid; ?></td>
    </tr>
</table>
<table id="table-ticket2">
    <tr>
        <th>
        </th>
        <th>
        </th>
        <th>
        </th>
    </tr>
    <tr>
        <td colspan="3">Description of Issue/Upgrade</td>
    </tr>
    <tr>
        <td colspan="3"><?php echo $editdescription; ?></td>
    </tr>
</table>
</br>
<table id="table-ticket3">
    <tr>
        <td colspan="5">Services Requested</td>
    </tr>
    <tr>
        <td colspan="5">Mechanical</td>
    </tr>
    <tr>
        <td>Oil Change/Service</td>
        <td><div style="color:<?php echo $oilchangeckd; ?>">Oil Change</div></td>
        <td><div style="color:<?php echo $fullserviceckd; ?>">Full Service</div></td>
        <td><div style="color:<?php echo $otherserviceckd; ?>">Other Service</div></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5">Other Services Description:</td>
    </tr>
	<tr>
        <td colspan="5"><?php echo $editotherservicedescription; ?></td>
    </tr>
    </br>
    <tr>
        <td>Tires</td>
        <td><div style="color:<?php echo $fronttirechangeckd; ?>">Front Tire Change</div></td>
        <td><div style="color:<?php echo $reartirechangeckd; ?>">Rear Tire Change</div></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5">Audio</td>
    </tr>
    <tr>
        <td>Audio Troubleshooting</td>
        <td><div style="color:<?php echo $audiotroubleshootingckd; ?>">Audio Troubleshooting</div></td>
        <td>Audio Upgrade</td>
        <td><div style="color:<?php echo $fullaudiosystemckd; ?>">Full Audio System</div></td>
        <td><div style="color:<?php echo $audioupgradeckd; ?>">Audio Upgrade</div></td>
    </tr>
    <tr>
        <td colspan="5">Other Audio Description:</td>
    </tr>
    <tr>
        <td colspan="5"><?php echo $editotheraudiodescription; ?></td>
    </tr>
    </br>
    <tr>
    </br>
	    <td>Ticket Number:</td>
		<td><img alt="Ticket Number" src="barcode.php?text=<?php echo $editid; ?>&print=true" /></td>
		<td>Vin Number:</td>
		<td><img alt="Ticket Number" src="barcode.php?text=<?php echo $editvin; ?>&print=true" /></td>
        <td></td>
    </tr>
</table>

    <p style="page-break-before: always">
<?php
    include "templates/posapi.php";
?>
    </html>


