<?php
require "templates/header.php";
/**
 * Function to query information based on 
 * a parameter: in this case, location.
 *
 */

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
                    <th>Email Address</th>
                    <th>Year</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["firstname"]; ?></td>
                <td><?php echo $row["lastname"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["location"]; ?></td>
                <td><?php echo $row["date"]; ?> </td>
                <td><?php echo $row["status"]; ?> </td>
                <td><a href="edit2.php?editid=<?php echo $row["id"]; ?>">Edit</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} ?>


<?php

if (isset($_POST['submit2'])) {
    try  {
        
        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM tickets ORDER by due_date ASC";

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
                    <th>Email Address</th>
                    <th>Year</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["firstname"]; ?></td>
                <td><?php echo $row["lastname"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["location"]; ?></td>
                <td><?php echo $row["date"]; ?> </td>
                <td><?php echo $row["status"]; ?> </td>
                <td><a href="edit2.php?editid=<?php echo $row["id"]; ?>">Edit</a></td>
                </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} ?> 

<?php

if (isset($_POST['submit3'])) {
    try  {
        
        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM tickets WHERE (status = 'complete') ORDER by due_date ASC";

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
if (isset($_POST['submit3'])) {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Year</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["firstname"]; ?></td>
                <td><?php echo $row["lastname"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["location"]; ?></td>
                <td><?php echo $row["date"]; ?> </td>
                <td><?php echo $row["status"]; ?> </td>
                <td><a href="edit2.php?editid=<?php echo $row["id"]; ?>">Edit</a></td>
                </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 
} ?> 
<h2>Select your edit option</h2>

<form method="post">
    <input type="submit" name="submit" value="Edit non-Complete">
    <input type="submit" name="submit2" value="Edit All">
    <input type="submit" name="submit3" value="Edit Complete">
</form>



<?php require "templates/footer.php"; ?>
