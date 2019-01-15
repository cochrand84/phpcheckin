
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "60";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    	<link rel="stylesheet" href="css/style.css">
<?php

    try  {
        
        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM tickets WHERE NOT (status = 'complete') ORDER by due_date ASC";
        $location = $_POST['location'];
        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll();


        $sql2 = "SELECT COUNT(*) FROM tickets WHERE NOT (status = 'complete')";
        $statement2 = $connection->prepare($sql2);
        $statement2->execute();
        $result2 = $statement2->fetchColumn();

        $sql3 = "SELECT COUNT(*) FROM tickets WHERE (status = 'In Paint')";
        $statement3 = $connection->prepare($sql3);
        $statement3->execute();
        $result3 = $statement3->fetchColumn();

        $sql4 = "SELECT COUNT(*) FROM tickets WHERE (status = 'Waiting on Parts')";
        $statement4 = $connection->prepare($sql4);
        $statement4->execute();
        $result4 = $statement4->fetchColumn();

        $sql5 = "SELECT COUNT(*) FROM tickets WHERE (status = 'On Lift')";
        $statement5 = $connection->prepare($sql5);
        $statement5->execute();
        $result5 = $statement5->fetchColumn();

        $sql6 = "SELECT COUNT(*) FROM tickets WHERE (status = 'Checked In')";
        $statement6 = $connection->prepare($sql6);
        $statement6->execute();
        $result6 = $statement6->fetchColumn();

        $sql7 = "SELECT COUNT(*) FROM tickets WHERE (status = 'Ready for Pickup')";
        $statement7 = $connection->prepare($sql7);
        $statement7->execute();
        $result7 = $statement7->fetchColumn();

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

?>

<div class="displaytable">
	        <table id="ticketstable" style="border-style:solid; border-width:2px; border-color: #c3d2d9;" cellspacing="0">
            <thead>
                <tr>    
                <th>Total number of bikes Not Complete:</th>
                <th>Number of bikes In Paint:</th>
                <th>Number of bikes Waiting on Parts:</th>
                <th>Number of bikes On Lift:</th>
                <th>Number of bikes Checked In:</th>
                <th>Number Ready for Pickup:</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>
            			<?php echo $result2; ?>
            		</td>
            		<td>
            			<?php echo $result3; ?>
            		</td>
            		 <td>
            			<?php echo $result4; ?>
            		</td>
            		 <td>
            			<?php echo $result5; ?>
            		</td>
            		  <td>
            			<?php echo $result6; ?>
            		</td>
            		  <td>
            			<?php echo $result7; ?>
            		</td>
            	</tr>
            	</tbody>
            	</table>
            	</div>
	<?php 
    if ($result && $statement->rowCount() > 0) { ?>


    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 

?>