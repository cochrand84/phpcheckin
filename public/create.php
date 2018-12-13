<?php

$vin = isset($_POST['vindecoder']) ? $_POST['vindecoder'] : '';

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


if (isset($_POST['submit'])) {

    require "../config.php";
    require "../common.php";  

    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    if($check !== false){
        $image1 = $_FILES['image1']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image1));      

        $db = new mysqli($host, $username, $password, $dbname);
        

        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent', '$dataTime', '$rand')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";

}

    $check = getimagesize($_FILES["image2"]["tmp_name"]);
    if($check !== false){
        $image2 = $_FILES['image2']['tmp_name'];
        $imgContent2 = addslashes(file_get_contents($image2));
     
        $db = new mysqli($host, $username, $password, $dbname);
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand2 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent2', '$dataTime', '$rand2')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";

}

    $check = getimagesize($_FILES["image3"]["tmp_name"]);
    if($check !== false){
        $image3 = $_FILES['image3']['tmp_name'];
        $imgContent3 = addslashes(file_get_contents($image3));
     
        $db = new mysqli($host, $username, $password, $dbname);
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand3 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent3', '$dataTime', '$rand3')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";

}
    $check = getimagesize($_FILES["image4"]["tmp_name"]);
    if($check !== false){
        $image4 = $_FILES['image4']['tmp_name'];
        $imgContent4 = addslashes(file_get_contents($image4));
     
        $db = new mysqli($host, $username, $password, $dbname);
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $rand3 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent4', '$dataTime', '$rand3')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";

}

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
            "image1"    => $rand,
            "image2"    => $rand2,
            "image2"    => $rand3,
            "image2"    => $rand4
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
    <input type="file" name="image1" id="image1" /><br />
    <input type="file" name="image2" id="image2" /><br />
    <input type="file" name="image3" id="image3" /><br />
    <input type="file" name="image4" id="image4" /><br />
    <input type="submit" name="submit" value="Submit">
</form>

<?php require "templates/footer.php"; ?>
