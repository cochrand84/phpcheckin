<?php
require "templates/header.php";
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
        
}


if (isset($_POST['submit'])) {

    require "../config.php";
 

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
            
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        

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
            
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        

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
            
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        

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
        $rand4 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent4', '$dataTime', '$rand4')");
        if($insert){
            
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        

}

    try  {
        
        $connection = new PDO($dsn, $username, $password, $options);
        $vinuppercase = strtoupper($VIN);
        $new_user = array(
            "vin"                       => $vinuppercase,
            "firstname"                 => $_POST['firstname'],
            "lastname"                  => $_POST['lastname'],
            "email"                     => $_POST['email'],
            "phone"                     => $_POST['phone'],
            "year"                      => $ModelYear,
            "location"                  => $_POST['location'],
            "status"                    => $_POST['status'],
            "make"                      => $Make,
            "model"                     => $Model,
            "due_date"                  => $_POST['due_date'],
            "image1"                    => $rand,
            "image2"                    => $rand2,
            "image3"                    => $rand3,
            "image4"                    => $rand4,
            "description"               => $_POST['description'],
            "oilchange"                 => $_POST['oilchange'],
            "fullservice"               => $_POST['fullservice'],
            "otherservice"              => $_POST['otherservice'],
            "otherservicedescription"   => $_POST['otherservicedescription'],
            "fronttirechange"           => $_POST['fronttirechange'],
            "reartirechange"            => $_POST['reartirechange'],
            "audiotroubleshooting"      => $_POST['audiotroubleshooting'],
            "otheraudiodescription"     => $_POST['otheraudiodescription'],
            "fullaudiosystem"           => $_POST['fullaudiosystem'],
            "audioupgrade"              => $_POST['audioupgrade'],
            "username"                  => $username,
            "phpid"                     => $_POST['phpid'],
            "miles_in"                  => $_POST['miles_in']
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

<?php if (isset($_POST['submit']) && $statement) { ?>
    <blockquote>Ticket for <?php echo $_POST['firstname']; ?> <?php echo $_POST['lastname']; ?> successfully added. Logged in as <?php echo $username?></blockquote>
<?php } ?>
<?php

if (isset($_POST['submiteditandprint'])) {

    require "../config.php";
 
   
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
            
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        

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
            
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        

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
            
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        

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
        $rand4 = rand() . "\n";

        $insert = $db->query("INSERT into images (image1, created, rand) VALUES ('$imgContent4', '$dataTime', '$rand4')");
        if($insert){
            
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        

}

    try  {
        
        $connection = new PDO($dsn, $username, $password, $options);
        $vinuppercase = strtoupper($VIN);
        $new_user = array(
            "vin"                       => $vinuppercase,
            "firstname"                 => $_POST['firstname'],
            "lastname"                  => $_POST['lastname'],
            "email"                     => $_POST['email'],
            "phone"                     => $_POST['phone'],
            "year"                      => $ModelYear,
            "location"                  => $_POST['location'],
            "status"                    => $_POST['status'],
            "make"                      => $Make,
            "model"                     => $Model,
            "due_date"                  => $_POST['due_date'],
            "image1"                    => $rand,
            "image2"                    => $rand2,
            "image3"                    => $rand3,
            "image4"                    => $rand4,
            "description"               => $_POST['description'],
            "oilchange"                 => $_POST['oilchange'],
            "fullservice"               => $_POST['fullservice'],
            "otherservice"              => $_POST['otherservice'],
            "otherservicedescription"   => $_POST['otherservicedescription'],
            "fronttirechange"           => $_POST['fronttirechange'],
            "reartirechange"            => $_POST['reartirechange'],
            "audiotroubleshooting"      => $_POST['audiotroubleshooting'],
            "otheraudiodescription"     => $_POST['otheraudiodescription'],
            "fullaudiosystem"           => $_POST['fullaudiosystem'],
            "audioupgrade"              => $_POST['audioupgrade'],
            "username"                  => $username,
            "phpid"                     => $_POST['phpid'],
            "miles_in"                  => $_POST['miles_in']
        );   
        $incommingid = $_POST['miles_in'];

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

<?php if (isset($_POST['submiteditandprint']) && $statement) { 
    header("Location: print.php?editid=$incommingid");
    ?>
    <blockquote>Ticket for <?php echo $_POST['firstname']; ?> <?php echo $_POST['lastname']; ?> successfully added. Logged in as <?php echo $username?></blockquote>
<?php } ?>

<h2>Create a new ticket</h2>
<div class="container">
        <form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-25">
            <label for="vin">VIN</label>
        </div>
        <div class="col-75">
            <input type="text" id="vindecoder" value="<?php echo $VIN; ?>"" name="vindecoder" maxlength="17" required/>
        </div>
    </div>  
        <div class="row">
        <div class="col-25">
            <label for="miles_in">Miles In</label>
        </div>
        <div class="col-75">
            <input type="text" id="miles_in" value="Miles In"" name="miles_in" maxlength="12" required/>
        </div>
    </div>  
    <div class="row">    
        <div class="col-25">
            <label for="firstname">First Name</label>
        </div>
        <div class="col-75">
            <input type="text" name="firstname" id="firstname" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="lastname">Last Name</label>
        </div>
        <div class="col-75">
            <input type="text" name="lastname" id="lastname" required>
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="email">Email Address</label>
        </div>
        <div class="col-75">
            <input type="email" name="email" id="email" >
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
            <label for="phone">Phone Number</label>
        </div>
        <div class="col-75">
            <input type="tel" name="phone" id="phone" required> 
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
                <label for="image1">Image 1</label>
        </div>
        <div class="col-75">
            <input type="file" name="image1" id="image1" required/><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image2">Image 2</label>
        </div>
        <div class="col-75">
            <input type="file" name="image2" id="image2" required/><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image3">Image 3</label>
        </div>
        <div class="col-75">
            <input type="file" name="image3" id="image3" required/><br />
        </div>
    </div>    
    <div class="row">     
        <div class="col-25">
                <label for="image4">Image 4</label>
        </div>
        <div class="col-75">
            <input type="file" name="image4" id="image4" required/><br />
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for ="description">Description of Issue/Upgrade</label>
        </div>
        <div class="col-75">
            <textarea name="description" id="description" rows="10" cols="80" required></textarea><br />
        </div>
    </div>
       <div class="row">     
        <div class="col-25">
            <label for="phpid">PHP ID</label>
        </div>
        <div class="col-75">
            <input type="text" name="phpid" id="phpid" required>
        </div>
    </div>
    <div class="row">
        <input type="submit" name="submit" value="Submit">
        <input type="submit" name="submiteditandprint" value="Submit and Print">
    </div>
        </form>
</div>

<?php require "templates/footer.php"; ?>

