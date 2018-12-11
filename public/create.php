<?php

/**
 * Use an HTML form to create a new entry in the
 * tickets table.
 *
 */

$vin = isset($_POST['b12']) ? $_POST['b12'] : '';

if ($vin) {
    $postdata = http_build_query([
            'format' => 'json',
            'data' => $vin
        ]
    );
    $opts = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                        "Content-Length: ".strlen($postdata)."\r\n",
            'content' => $postdata
        ]
    ];

    $apiURL = "https://vpic.nhtsa.dot.gov/api/vehicles/DecodeVINValuesBatch/";
    $context = stream_context_create($opts);
    $fp = fopen($apiURL, 'rb', false, $context);

    $line_of_text = fgets($fp);
    $vindecode = json_decode($line_of_text, true);

    fclose($fp);    

    echo $vindecode;
} else {
    echo 'No Vin Inputted';
}


if (isset($_POST['submit'])) {
    require "../config.php";
    require "../common.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
        $new_user = array(
            "firstname" => $_POST['firstname'],
            "lastname"  => $_POST['lastname'],
            "email"     => $_POST['email'],
            "year"       => $_POST['year'],
            "location"  => $_POST['location'],
            "status"    => $_POST['status']
        );

        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tickets",
                implode(", ", array_keys($new_user)),
                ":" . implode(", :", array_keys($new_user))
        );
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

<?php require "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
    <blockquote><?php echo $_POST['firstname']; ?> successfully added.</blockquote>
<?php } ?>

<h2>Add a user</h2>

<form method="post">
    <label for="vin">VIN</label>
    <input type="text" id="b12" placeholder="Enter VIN" name="b12" maxlength="17"/>
    <button id="submit_btn" type="submit">Decode Vin</button>
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname">
    <label for="email">Email Address</label>
    <input type="text" name="email" id="email">
    <label for="year">Year</label>
    <input type="text" name="year" id="year">
    <label for="location">Location</label>
    <input type="text" name="location" id="location">
    <label for="status">Status</label>
    <select name="status">
    <option value="selectstatus" selected>Select Status</option>
    <option value="checked-in">Checked-In</option>
    <option value="waiting">Waiting</option>
    <option value="finished">Finished</option>
    <option value="complete">Complete</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
