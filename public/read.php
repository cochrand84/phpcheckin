<?php

if (isset($_POST['submit'])) {
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
}
?>
<?php require "templates/header.php"; ?>
        
<?php  
if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

               <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Year</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Vin Number</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Image 4</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["firstname"]); ?></td>
                <td><?php echo escape($row["lastname"]); ?></td>
                <td><?php echo escape($row["year"]); ?></td>
                <td><?php echo escape($row["location"]); ?></td>
                <td><?php echo escape($row["date"]); ?> </td>
                <td><?php echo escape($row["vin"]); ?> </td>
                <td><?php echo escape($row["make"]); ?> </td>
                <td><?php echo escape($row["model"]); ?> </td>
                <td><?php echo escape($row["due_date"]); ?> </td>
                <td><?php echo escape($row["status"]); ?> </td>                
              <td><a href="view.php?rand=<?php echo $row["image1"]; ?>"><img src="view.php?rand=<?php echo $row["image1"]; ?>" alt="<?php echo $row["image1"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image2"]; ?>"><img src="view.php?rand=<?php echo $row["image2"]; ?>" alt="<?php echo $row["image2"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image3"]; ?>"><img src="view.php?rand=<?php echo $row["image3"]; ?>" alt="<?php echo $row["image3"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image4"]; ?>"><img src="view.php?rand=<?php echo $row["image4"]; ?>" alt="<?php echo $row["image4"]; ?>" height="42" width="42"></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} 




if (isset($_POST['submit2'])) {
    try  {
        
        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT *  FROM tickets ORDER by due_date ASC";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
        
<?php  
if (isset($_POST['submit2'])) {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

               <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Year</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Vin Number</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Image 4</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["firstname"]); ?></td>
                <td><?php echo escape($row["lastname"]); ?></td>
                <td><?php echo escape($row["year"]); ?></td>
                <td><?php echo escape($row["location"]); ?></td>
                <td><?php echo escape($row["date"]); ?> </td>
                <td><?php echo escape($row["vin"]); ?> </td>
                <td><?php echo escape($row["make"]); ?> </td>
                <td><?php echo escape($row["model"]); ?> </td>
                <td><?php echo escape($row["due_date"]); ?> </td>
                <td><?php echo escape($row["status"]); ?> </td>                
              <td><a href="view.php?rand=<?php echo $row["image1"]; ?>"><img src="view.php?rand=<?php echo $row["image1"]; ?>" alt="<?php echo $row["image1"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image2"]; ?>"><img src="view.php?rand=<?php echo $row["image2"]; ?>" alt="<?php echo $row["image2"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image3"]; ?>"><img src="view.php?rand=<?php echo $row["image3"]; ?>" alt="<?php echo $row["image3"]; ?>" height="42" width="42"></a></td>
              <td><a href="view.php?rand=<?php echo $row["image4"]; ?>"><img src="view.php?rand=<?php echo $row["image4"]; ?>" alt="<?php echo $row["image4"]; ?>" height="42" width="42"></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} ?> 


<h2>Select your view option</h2>

<form method="post">
    <input type="submit" name="submit" value="View non-Complete">
    <input type="submit" name="submit2" value="View all">
</form>

<?php require "templates/footer.php"; ?>
