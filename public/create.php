<?php

/**
 * Use an HTML form to create a new entry in the
 * tickets table.
 *
 */

$vin = isset($_POST['vindecoder']) ? $_POST['vindecoder'] : '';

#$check = getimagesize($_FILES["image1"]["tmp_name"]);
 #   if($check !== false){
 #       $image = $_FILES['image1']['tmp_name'];
 #       $imgContent = addslashes(file_get_contents($image));
#}
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
    $json = json_decode($line_of_text, true);

    fclose($fp);
    $i = 0;
    $vindecode = '';
    foreach ($json['Results'][0] as $k => $v) {
        $vindecode .= '' . $k . ' - ' . $v . '';
        ${$k} = $v;
        $i++;
    }



} else {
        echo 'No Vin Inputted';
}

if(isset($_POST["upload"])){
    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    if($check !== false){
        $image1 = $_FILES['image1']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image1));


        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'a51checkin';
        $dbPassword = 'ylKy724$';
        $dbName     = 'area51_checkin';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand = rand() . "\n";
        //Insert image content into database
        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent', '$dataTime', '$rand')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}

if (isset($_POST['submit'])) {
    require "../config.php";
    require "../common.php";  

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
     
        $new_user = array(
            "vin"       => $_POST['vindecoder'],
            "firstname" => $_POST['firstname'],
            "lastname"  => $_POST['lastname'],
            "email"     => $_POST['email'],
            "year"      => $_POST['year'],
            "location"  => $_POST['location'],
            "status"    => $_POST['status'],
            "make"      => $_POST['make'],
            "model"     => $_POST['model'],
            "due_date"  => $_POST['due_date'],
            "image1"    => $_POST['image1']
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

<form method="post" enctype="multipart/form-data">
    <label for="vin">VIN</label>
    <input type="text" id="vindecoder" value="<?php echo $VIN; ?>"" name="vindecoder" maxlength="17"/>
    <button id="submit_btn" type="submit">Decode Vin</button>
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname">
    <label for="email">Email Address</label>
    <input type="text" name="email" id="email">
    <label for="year">Year</label>
    <input type="text" name="year" id="year" value="<?php echo $ModelYear; ?>"">
    <label for="make">Make</label>
    <input type="text" name="make" id="make" value="<?php echo $Make; ?>"">
    <label for="model">Model</label>
    <input type="text" name="model" id="model" value="<?php echo $Model; ?>"">
    <label for="location">Location</label>
    <input type="text" name="location" id="location">
    <label for="due_date">Due Date</label>
    <input type="date" name="due_date" value="" min="<?php echo date("Y-m-d"); ?>">
    <label for="status">Status</label>
    <select name="status">
    <option value="selectstatus" selected>Select Status</option>
            <option value="Checked In">Checked In</option>
            <option value="Waiting on Parts">Waiting on Parts</option>
            <option value="In Paint">In Paint</option>
            <option value="In Service">In Service</option>
            <option value="Waiting on Lift">Waiting on Lift</option>
            <option value="Awaiting Deposit">Awaiting Deposit</option>
            <option value="Ready For Pickup">Ready For Pickup</option>
    </select>
    <label for="image1">Image 1</label>
    <input type="file" name="image1" id="image1" value="<?php echo $rand; ?>"/><input type="submit" name="upload" value="Upload"><br />
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>



<?php require "templates/footer.php"; ?>
