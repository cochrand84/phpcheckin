

<html>
    <head>
    </head>
    <body>
    	<link rel="stylesheet" href="css/style.css">
<?php

    try  {
        
        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql2 = "SELECT COUNT(*) FROM tickets WHERE NOT (status = 'Complete')";
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


        $sql8 = "SELECT COUNT(*) FROM tickets WHERE (status = 'Waiting on Test Ride')";
        $statement8 = $connection->prepare($sql8);
        $statement8->execute();
        $result8 = $statement8->fetchColumn();

        $sql9 = "SELECT COUNT(*) FROM tickets WHERE (status = 'In Service')";
        $statement9 = $connection->prepare($sql9);
        $statement9->execute();
        $result9 = $statement9->fetchColumn();

        $sql10 = "SELECT COUNT(*) FROM tickets WHERE (status = 'Awaiting Deposit')";
        $statement10 = $connection->prepare($sql10);
        $statement10->execute();
        $result10 = $statement10->fetchColumn();

        $sql11 = "SELECT COUNT(*) FROM tickets WHERE (status = 'Waiting on Lift')";
        $statement11 = $connection->prepare($sql11);
        $statement11->execute();
        $result11 = $statement11->fetchColumn();

        $sql12 = "SELECT COUNT(*) FROM tickets WHERE (status = 'Complete')";
        $statement12 = $connection->prepare($sql12);
        $statement12->execute();
        $result12 = $statement12->fetchColumn();

        $sql13 = "SELECT COUNT(*) FROM tickets WHERE (status = 'Waiting on Quote')";
        $statement13 = $connection->prepare($sql13);
        $statement13->execute();
        $result13 = $statement13->fetchColumn();

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

?>
<h1>Overview</h1>
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
<div class="displaytable">
            <table id="ticketstable" style="border-style:solid; border-width:2px; border-color: #c3d2d9;" cellspacing="0">
            <thead>
                <tr>    
                <th>Number of bikes Waiting on Test Ride:</th>
                <th>Number of bikes In Service:</th>
                <th>Number of bikes Awaiting Deposit:</th>
                <th>Number of bikes Waiting on Lift:</th>
                <th>Number of bikes Complete:</th>
                <th>Number of bikes Waiting on Quote:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo $result8; ?>
                    </td>
                    <td>
                        <?php echo $result9; ?>
                    </td>
                     <td>
                        <?php echo $result10; ?>
                    </td>
                     <td>
                        <?php echo $result11; ?>
                    </td>
                      <td>
                        <?php echo $result12; ?>
                    </td>
                      <td>
                        <?php echo $result13; ?>
                    </td>
                </tr>
                </tbody>
                </table>
                </div>
	<?php 
    


    
        
    

?>