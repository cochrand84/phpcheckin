
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
        echo "<center>";
        echo "<h2>";
        echo "Could not find a Ticket with that name and ticket id number, please try again";
        echo "</h2>";
        echo "</center>";
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
 } 

         echo "<h2>Your bikes status:</h2>";
         echo "Hello, ";
         echo $editfirstname;
         echo " ";
         echo $editlastname;
         echo ".";
         echo " Your ";
         echo $edityear;
         echo " ";
         echo $editmake;
         echo " ";
         echo $editmodel;
         echo " ";
         echo "is currently ";
         echo $editstatus;
         echo " and in/on ";
         echo $editlocation;
         echo "<p>";
         echo "It is currently scheduled to be completed on ";
         echo $editduedate;
         echo ", we will call you at ";
         echo $editphone;
         echo " "; 
         echo "after we complete the work described below:";
         echo "<p>";
         echo $editdescription;
echo "<p>";
echo "If any of the above information is incorrect, please contact us at 334-446-0595";

echo "<a href="javascript:history.back()" class="submit" align="center">Go back</a>";



        } else { 
        echo $_POST['status'];
     } 


   
?>