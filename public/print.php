

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
                    $editphpid                      = $row['phpid'];
                    $edityear                       = $row["year"]; 
                    $editmake                       = $row["make"];
                    $editmodel                      = $row["model"];
                    $servicenote1                   = $row['servicenote1'];
                    $servicenote2                   = $row['servicenote2'];
                    $servicenote3                   = $row['servicenote3'];
                    $servicenote1date               = $row['servicenote1date'];
                    $servicenote2date               = $row['servicenote2date'];
                    $servicenote3date               = $row['servicenote3date'];


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
        <td colspan="3">Description of Issue/Upgrade</td>
    </tr>
    <tr>
        <td colspan="3"><?php echo $editdescription; ?></td>
    </tr>
    <tr>
        <td colspan="3">Service note 1 - Date - <?php echo $servicenote1date; ?></td>
    </tr>
    <tr>
        <td colspan="3"><?php echo $servicenote1; ?></td>
    </tr>
    <tr>
        <td colspan="3">Service note 2 - Date - <?php echo $servicenote2date; ?><</td>
    </tr>
    <tr>
        <td colspan="3"><?php echo $servicenote2; ?></td>
    </tr>
    <tr>
        <td colspan="3">Service note 3 - Date - <?php echo $servicenote3date; ?><</td>
    </tr>
    <tr>
        <td colspan="3"><?php echo $servicenote3; ?></td>
    </tr>
</table>
<table id="table-ticket3">
    <tr>
	    <td>Ticket Number:</td>
		<td><img alt="Ticket Number" src="barcode.php?text=<?php echo $editid; ?>&print=true" /></td>
		<td>Vin Number:</td>
		<td><img alt="Ticket Number" src="barcode.php?text=<?php echo $editvin; ?>&print=true" /></td>
        <td></td>
    </tr>
</table>

<table id="table-print-footer">
    <tr>
        <td colspan="2">Blah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blahBlah blah blah</td>
    </tr>
    <tr>
        <td>
            Signature:
        </td>
        <td>
            _____________________________________
        </td>
    </tr>
    </table>

    <p style="page-break-before: always">
<?php
    include "templates/posapi.php";
?>
    </html>


