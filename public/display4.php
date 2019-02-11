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

    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

               <table id="ticketstable">
            <thead>
                <tr>
                    <th>Image 1</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
              <td><a href="view.php?rand=<?php echo $row["image1"]; ?>"><img src="view.php?rand=<?php echo $row["image1"]; ?>" alt="<?php echo $row["image1"]; ?>" height="42" width="42"></a></td>
            </tr>
        <?php }  ?>
        </tbody>
    </table>

    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['status']); ?>.</blockquote>
    <?php } 

?>
    
