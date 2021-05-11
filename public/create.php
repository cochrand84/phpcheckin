<?php
require "templates/header.php";

function compressImage($source, $destination)
{
    // Get image info
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];

    // Create a new image from file
    switch ($mime)
    {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, 75);
        break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            imagepng($image, $destination, 0);
        break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            imagegif($image, $destination, 0);
        break;
        default:
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, 75);
    }

    // Return compressed image
    return $destination;
}

function post()
{

    require "../config.php";

    $vin = isset($_POST['vindecoder']) ? $_POST['vindecoder'] : '';
    if ($vin)
    {
        $postdata = http_build_query(['format' => 'json', 'data' => $vin]);
        $opts = ['http' => ['method' => 'POST', 'header' => "Content-Type: application/x-www-form-urlencoded\r\n" . "Content-Length: " . strlen($postdata) . "\r\n", 'content' => $postdata]];

        $apiURL = "https://vpic.nhtsa.dot.gov/api/vehicles/DecodeVINValuesBatch/";
        $context = stream_context_create($opts);
        $fp = fopen($apiURL, 'rb', false, $context);

        $line_of_text = fgets($fp);
        $json = json_decode($line_of_text, true);

        fclose($fp);
        $i = 0;
        $vindecode = '';
        foreach ($json['Results'][0] as $k => $v)
        {
            $vindecode .= '' . $k . ' - ' . $v . '';
            $
            {
                $k
            } = $v;
            $i++;
        }

    }
    else
    {

    }

    $maxfilesize = '20000000';
    $minfilesize = '200000';
    $year = date("Y");
    $month = date("M");
    if (!file_exists("uploads/$year/$month/"))
    {
        mkdir("uploads/$year/$month/", 0777, true);
    }
    $currentDir = getcwd();
    $uploadDirectory = "/uploads/$year/$month/";
    $fileExtensions = ['jpeg', 'jpg', 'png']; // Get all the file extensions
    
    //begin image 1
    $errors1 = []; // Store all foreseen and unforseen errors here
    $fileName1 = $_FILES['image1']['name'];
    $fileSize1 = $_FILES['image1']['size'];
    $fileTmpName1 = $_FILES['image1']['tmp_name'];
    $fileType1 = $_FILES['image1']['type'];
    $fileExtension1 = strtolower(end(explode('.', $fileName1)));
    $rand1 = rand();
    $randfileName1 = $rand1 . basename($fileName1);
    $uploadPath1 = $currentDir . $uploadDirectory . $randfileName1;
    $imgpath1 = $uploadDirectory . $randfileName1;
    //check file extension
    if (!in_array($fileExtension1, $fileExtensions))
    {
        $errors1[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }
    //check max file size
    if ($fileSize1 > $maxfilesize)
    {
        $errors1[] = "This file is too large... use a smaller image.";
    }
    //check min file size
    if ($fileSize1 < $minfilesize)
    {
        $errors1[] = "This file does not meet the minimum size, please select a larger image";
    }
    //if no error
    if (empty($errors1))
    {
        $compressedImage1 = compressImage($fileTmpName1, $uploadPath1);

    }


    else
    {
        foreach ($errors1 as $error1)
        {
            echo $error1 . "These are the errors" . "\n";
        }
    }

    if (empty($errors1))
    {

        $db = new mysqli($host, $username, $password, $dbname);

        if ($db->connect_error)
        {
            die("Connection failed: " . $db->connect_error);
        }

        $insert = $db->query("INSERT into images (image1, created) VALUES ('$imgpath1', '$dataTime')");
        if ($insert1)
        {
        }
        else
        {
        }
    }
    else
    {
    }
    //end of image 1
    //begin of image 2
    $errors2 = []; // Store all foreseen and unforseen errors here
    $fileName2 = $_FILES['image2']['name'];
    $fileSize2 = $_FILES['image2']['size'];
    $fileTmpName2 = $_FILES['image2']['tmp_name'];
    $fileType2 = $_FILES['image2']['type'];
    $fileExtension2 = strtolower(end(explode('.', $fileName2)));
    $rand2 = rand();
    $randfileName2 = $rand2 . basename($fileName2);
    $uploadPath2 = $currentDir . $uploadDirectory . $randfileName2;
    $imgpath2 = $uploadDirectory . $randfileName2;
    //check file extension
    if (!in_array($fileExtension2, $fileExtensions))
    {
        $errors2[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }
    //check max file size
    if ($fileSize2 > $maxfilesize)
    {
        $errors2[] = "This file is too large... use a smaller image.";
    }
    //check min file size
    if ($fileSize2 < $minfilesize)
    {
        $errors2[] = "This file does not meet the minimum size, please select a larger image";
    }
    //if no error

    if (empty($errors2))
    {
        $compressedImage2 = compressImage($fileTmpName2, $uploadPath2);

    }
    else
    {
        foreach ($errors2 as $error2)
        {
            echo $error2 . "These are the errors" . "\n";
        }
    }

    if (empty($errors2))
    {

        $db = new mysqli($host, $username, $password, $dbname);

        if ($db->connect_error)
        {
            die("Connection failed: " . $db->connect_error);
        }

        $insert = $db->query("INSERT into images (image2, created) VALUES ('$imgpath2', '$dataTime')");
        if ($insert2)
        {
        }
        else
        {
        }
    }
    else
    {
    }
    //end of image 2
    //start of image 3 upload
    $errors3 = []; // Store all foreseen and unforseen errors here
    $fileName3 = $_FILES['image3']['name'];
    $fileSize3 = $_FILES['image3']['size'];
    $fileTmpName3 = $_FILES['image3']['tmp_name'];
    $fileType3 = $_FILES['image3']['type'];
    $fileExtension3 = strtolower(end(explode('.', $fileName3)));
    $rand3 = rand();
    $randfileName3 = $rand3 . basename($fileName3);
    $uploadPath3 = $currentDir . $uploadDirectory . $randfileName3;
    $imgpath3 = $uploadDirectory . $randfileName3;
    //check file extension
    if (!in_array($fileExtension3, $fileExtensions))
    {
        $errors3[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }
    //check max file size
    if ($fileSize3 > $maxfilesize)
    {
        $errors3[] = "This file is too large... use a smaller image.";
    }
    //check min file size
    if ($fileSize3 < $minfilesize)
    {
        $errors3[] = "This file does not meet the minimum size, please select a larger image";
    }
    //if no error

    if (empty($errors3))
    {
        $compressedImage3 = compressImage($fileTmpName3, $uploadPath3);

    }
    else
    {
        foreach ($errors3 as $error3)
        {
            echo $error3 . "These are the errors" . "\n";
        }
    }

    if (empty($errors3))
    {

        $db = new mysqli($host, $username, $password, $dbname);

        if ($db->connect_error)
        {
            die("Connection failed: " . $db->connect_error);
        }

        $insert = $db->query("INSERT into images (image3, created) VALUES ('$imgpath3', '$dataTime')");
        if ($insert3)
        {
        }
        else
        {
        }
    }
    else
    {
    }
    //end of image 3
    //start of image 4 upload
    $errors4 = []; // Store all foreseen and unforseen errors here
    $fileName4 = $_FILES['image4']['name'];
    $fileSize4 = $_FILES['image4']['size'];
    $fileTmpName4 = $_FILES['image4']['tmp_name'];
    $fileType4 = $_FILES['image4']['type'];
    $fileExtension4 = strtolower(end(explode('.', $fileName4)));
    $rand4 = rand();
    $randfileName4 = $rand4 . basename($fileName4);
    $uploadPath4 = $currentDir . $uploadDirectory . $randfileName4;
    $imgpath4 = $uploadDirectory . $randfileName4;
    //check file extension
    if (!in_array($fileExtension4, $fileExtensions))
    {
        $errors4[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }
    //check max file size
    if ($fileSize4 > $maxfilesize)
    {
        $errors4[] = "This file is too large... use a smaller image.";
    }
    //check min file size
    if ($fileSize4 < $minfilesize)
    {
        $errors4[] = "This file does not meet the minimum size, please select a larger image";
    }
    //if no error

    if (empty($errors4))
    {
        $compressedImage4 = compressImage($fileTmpName4, $uploadPath4);

    }
    else
    {
        foreach ($errors4 as $error4)
        {
            echo $error4 . "These are the errors" . "\n";
        }
    }

    if (empty($errors4))
    {

        $db = new mysqli($host, $username, $password, $dbname);

        if ($db->connect_error)
        {
            die("Connection failed: " . $db->connect_error);
        }

        $insert = $db->query("INSERT into images (image4, created) VALUES ('$imgpath4', '$dataTime')");
        if ($insert4)
        {
        }
        else
        {

        }
    }
    else
    {
    }
    //end of image 4

        //start of image 5 upload
    $errors5 = []; // Store all foreseen and unforseen errors here
    $fileName5 = $_FILES['image5']['name'];
    $fileSize5 = $_FILES['image5']['size'];
    $fileTmpName5 = $_FILES['image5']['tmp_name'];
    $fileType5 = $_FILES['image5']['type'];
    $fileExtension5 = strtolower(end(explode('.', $fileName5)));
    $rand5 = rand();
    $randfileName5 = $rand5 . basename($fileName5);
    $uploadPath5 = $currentDir . $uploadDirectory . $randfileName5;
    $imgpath5 = $uploadDirectory . $randfileName5;
    //check file extension
    if (!in_array($fileExtension5, $fileExtensions))
    {
        $errors5[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }
    //check max file size
    if ($fileSize5 > $maxfilesize)
    {
        $errors5[] = "This file is too large... use a smaller image.";
    }
    //check min file size
    if ($fileSize5 < $minfilesize)
    {
        $errors5[] = "This file does not meet the minimum size, please select a larger image";
    }
    //if no error

    if (empty($errors5))
    {
        $compressedImage5 = compressImage($fileTmpName5, $uploadPath5);

    }
    else
    {
        foreach ($errors5 as $error5)
        {
            echo $error5 . "These are the errors" . "\n";
        }
    }

    if (empty($errors5))
    {

        $db = new mysqli($host, $username, $password, $dbname);

        if ($db->connect_error)
        {
            die("Connection failed: " . $db->connect_error);
        }

        $insert = $db->query("INSERT into images (image5, created) VALUES ('$imgpath5', '$dataTime')");
        if ($insert5)
        {
        }
        else
        {

        }
    }
    else
    {
    }
    //end of image 5

        //start of image 6 upload
    $errors6 = []; // Store all foreseen and unforseen errors here
    $fileName6 = $_FILES['image6']['name'];
    $fileSize6 = $_FILES['image6']['size'];
    $fileTmpName6 = $_FILES['image6']['tmp_name'];
    $fileType6 = $_FILES['image6']['type'];
    $fileExtension6 = strtolower(end(explode('.', $fileName6)));
    $rand6 = rand();
    $randfileName6 = $rand6 . basename($fileName6);
    $uploadPath6 = $currentDir . $uploadDirectory . $randfileName6;
    $imgpath6 = $uploadDirectory . $randfileName6;
    //check file extension
    if (!in_array($fileExtension6, $fileExtensions))
    {
        $errors6[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }
    //check max file size
    if ($fileSize6 > $maxfilesize)
    {
        $errors6[] = "This file is too large... use a smaller image.";
    }
    //check min file size
    if ($fileSize6 < $minfilesize)
    {
        $errors6[] = "This file does not meet the minimum size, please select a larger image";
    }
    //if no error

    if (empty($errors6))
    {
        $compressedImage6 = compressImage($fileTmpName6, $uploadPath6);

    }
    else
    {
        foreach ($errors6 as $error6)
        {
            echo $error6 . "These are the errors" . "\n";
        }
    }

    if (empty($errors6))
    {

        $db = new mysqli($host, $username, $password, $dbname);

        if ($db->connect_error)
        {
            die("Connection failed: " . $db->connect_error);
        }

        $insert = $db->query("INSERT into images (image6, created) VALUES ('$imgpath6', '$dataTime')");
        if ($insert6)
        {
        }
        else
        {

        }
    }
    else
    {
    }
    //end of image 6

    $search = $_POST['phpid'];
    $curl = curl_init();

    if ($search == 0)
    {
    }
    else
    {

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://area51customs.phppointofsale.com/index.php/api/v1/sales/$search",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/xml",
                "cache-control: no-cache",
                "x-api-key: s088wogkssw84cwwkgggk4w040coowggg4c08c44",
            ) ,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $xml = new SimpleXMLElement($response) or die("Error: Cannot create object");
        $email = $xml->customer_email;
        $phone = $xml->customer_phone_number;
        $first_name = $xml->customer_first_name;
        $last_name = $xml->customer_last_name;
        $sale_total = $xml->total;

    }

    try
    {

        $connection = new PDO($dsn, $username, $password, $options);
        $vinuppercase = strtoupper($VIN);
        $new_user = array(
            "vin" => $vinuppercase,
            "firstname" => $first_name,
            "lastname" => $last_name,
            "email" => $email,
            "phone" => $phone,
            "year" => $ModelYear,
            "location" => $_POST['location'],
            "status" => $_POST['status'],
            "make" => $Make,
            "model" => $Model,
            "series" => $Series,
            "due_date" => $_POST['due_date'],
            "image1" => $imgpath1,
            "image2" => $imgpath2,
            "image3" => $imgpath3,
            "image4" => $imgpath4,
            "image5" => $imgpath5,
            "image6" => $imgpath6,            
            "description" => $_POST['description'],
            "oilchange" => $_POST['oilchange'],
            "fullservice" => $_POST['fullservice'],
            "otherservice" => $_POST['otherservice'],
            "otherservicedescription" => $_POST['otherservicedescription'],
            "fronttirechange" => $_POST['fronttirechange'],
            "reartirechange" => $_POST['reartirechange'],
            "audiotroubleshooting" => $_POST['audiotroubleshooting'],
            "otheraudiodescription" => $_POST['otheraudiodescription'],
            "fullaudiosystem" => $_POST['fullaudiosystem'],
            "audioupgrade" => $_POST['audioupgrade'],
            "username" => $username,
            "phpid" => $_POST['phpid'],
            "miles_in" => $_POST['miles_in']
        );

        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "tickets", implode(", ", array_keys($new_user)) , ":" . implode(", :", array_keys($new_user)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
$vin = isset($_POST['vindecoder']) ? $_POST['vindecoder'] : '';

if (isset($_POST['submit']))
{

    post();

    try
    {

        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM tickets ORDER BY ID DESC LIMIT 1";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }

    if ($result && $statement->rowCount() > 0)
    {
        foreach ($result as $row)
        {
            $editid = $row["id"];
        }
    }
    else
    {
        echo $_POST['status'];
    }

    header("Location: submitsuccess.php?editid=$editid");
}

if (isset($_POST['submiteditandprint']))
{

    post();

    try
    {

        require "../config.php";
        require "../common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM tickets ORDER BY ID DESC LIMIT 1";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }

    if ($result && $statement->rowCount() > 0)
    {
        foreach ($result as $row)
        {
            $editid = $row["id"];
        }
    }
    else
    {
        echo $_POST['status'];
    }

    header("Location: print.php?editid=$editid");

}

?>

<h2>Create a new ticket</h2>
<div class="container">
        <form method="post" enctype="multipart/form-data">
                   <div class="row">     
        <div class="col-25">
            <label for="phpid">POS ID</label>
        </div>
        <div class="col-75">
            <input type="number" name="phpid" id="phpid" minlength="4" required>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="vin">VIN</label>
        </div>
        <div class="col-75">
            <input type="text" id="vindecoder" value="<?php echo $VIN; ?>" name="vindecoder" minlength="17" maxlength="17" required/>
        </div>
    </div>  
        <div class="row">
        <div class="col-25">
            <label for="miles_in">Miles In</label>
        </div>
        <div class="col-75">
            <input type="number" id="miles_in" name="miles_in" maxlength="18" minlength="3" required/>
        </div>
    </div> 
    <div class="row">     
        <div class="col-25">   
            <label for="location">Location</label>
        </div>
        <div class="col-75">
            <select name="location" id="location" required>
            <option value="selectlocation" selected>Select Location</option>
                    <option value="Out Front">Showroom</option>
                    <option value="Quonset Hut">Boat Shop</option>
                    <option value="Shop">Mechanics Shop</option>
                    <option value="At Harley">At Harley</option>
                    <option value="Audio Bay">Audio Bay</option>
                    <option value="Audio Bay">Body Shop</option>
            </select><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="due_date">Due Date</label>
        </div>
        <div class="col-75">
            <input type="date" name="due_date" value="" min="<?php echo date("Y-m-d"); ?>" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="status">Status</label>
        </div>
        <div class="col-75">
            <select name="status"required>
            <option value="selectstatus" selected>Select Status</option>
                    <option value="Checked In">Checked In</option>
                    <option value="Waiting on Parts">Waiting on Parts</option>
                    <option value="In Paint">In Paint</option>
                    <option value="In Service">In Service</option>
                    <option value="Waiting on Lift">Waiting on Lift</option>
                    <option value="Awaiting Deposit">Awaiting Deposit</option>
                    <option value="Ready For Pickup">Ready For Pickup</option>
                    <option value="Complete">Complete</option>
                    <option value="On Lift">On Lift</option>
                    <option value="Waiting on Test Ride">Waiting on Test Ride</option>
                    <option value="Waiting on Quote">Waiting on Quote</option>
                    <option value="Storage">Storage</option>
                    <option value="Consignment">Consignment</option>
            </select><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image1">Odometer</label>
        </div>
        <div class="col-75">
            <input type="file" name="image1" id="image1" required/><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image2">Vin Plate</label>
        </div>
        <div class="col-75">
            <input type="file" name="image2" id="image2" required/><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image3">Left Side</label>
        </div>
        <div class="col-75">
            <input type="file" name="image3" id="image3" required/><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image4">Front</label>
        </div>
        <div class="col-75">
            <input type="file" name="image4" id="image4" required/><br />
        </div>
    </div>
        <div class="row">     
        <div class="col-25">
                <label for="image4">Right Side</label>
        </div>
        <div class="col-75">
            <input type="file" name="image5" id="image5" required/><br />
        </div>
    </div>
        <div class="row">     
        <div class="col-25">
                <label for="image4">Back</label>
        </div>
        <div class="col-75">
            <input type="file" name="image6" id="image6" required/><br />
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for ="description">Description of Issue/Upgrade</label>
        </div>
        <div class="col-75">
            <textarea name="description" id="description" rows="10" cols="80" minlength="25" required></textarea><br />
        </div>
    </div>

    <div class="row">
        <input type="submit" name="submit" value="Submit">
        <input type="submit" name="submiteditandprint" value="Submit and Print">
    </div>
        </form>
</div>

<?php require "templates/footer.php"; ?>