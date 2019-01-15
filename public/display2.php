

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

	<?php 
    if ($result && $statement->rowCount() > 0) { ?>

<div class="displaytable">
	        <table id="ticketstable" style="border-style:solid; border-width:2px; border-color: #c3d2d9;" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Check in Date</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Location</th>
                    <th>Year</th>                 
                    <th>Make</th>
                    <th>Model</th>
                    <th>Due Date</th>
                    <th>Time Left</th>
                    <th>Status</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["date"]); ?> </td>
                <td><?php echo escape($row["firstname"]); ?></td>
                <td><?php echo escape($row["lastname"]); ?></td>
                <td><?php echo escape($row["location"]); ?></td>
                <td><?php echo escape($row["year"]); ?></td>
                <td><?php echo escape($row["make"]); ?> </td>
                <td><?php echo escape($row["model"]); ?> </td>
                <td><?php echo escape($row["due_date"]); ?> </td>
                <td><?php 
                        $daysleft = 0;
                        $curDate = date('Y-m-d');
                        $fromDate = $row["due_date"];

                        if($curDate > $fromDate){
                        	$dayscolor = "red";
                        }
                        else{
                        	$dayscolor = "black";
                        }

                        $secondsLeft = abs(strtotime($curDate) - strtotime($fromDate));
                        $minutesLeft = $secondsLeft / 60;
                        $hoursLeft = $minutesLeft / 60;
                        $daysLeft = $hoursLeft / 24;
                        echo "<p style=color:$dayscolor> $daysLeft days";
                        ?>
                </td>
                <td><?php echo escape($row["status"]); ?> </td>  
                <td><?php echo escape($row["description"]); ?> </td>              
            </tr>
        <?php }  ?>
        </tbody>
    </table>
</div>

    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 

?>