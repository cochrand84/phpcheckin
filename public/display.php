
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "60";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
<?php
require "templates/header.php";

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
                        $secondsLeft = abs(strtotime($curDate) - strtotime($fromDate));
                        $minutesLeft = $secondsLeft / 60;
                        $hoursLeft = $minutesLeft / 60;
                        $daysLeft = $hoursLeft / 24;
                        echo "$daysLeft days";
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