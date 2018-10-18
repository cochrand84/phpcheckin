<!doctype html>
<html>
<?php include "includes/header.php"; ?>
<body>
<form action="includes/upload.php" method="post" enctype="multipart/form-data">
  <div class="row">
  	<div class="col-25">
		Current date is: 
	</div>
	<div class="col-25">
		<input type="date" name="check_in_date" value="<?php echo date("Y-m-d"); ?>" readonly="readonly">
	</div>
	<div class="col-25">
		Due date is: 
	</div>
	<div class="col-25">
		<input type="date" name="due_date" value="" min="<?php echo date("Y-m-d"); ?>">
	</div>
	<div class="col-25">
		First Name: 
	</div>
	<div class="col-25">
		<input type="text" name="firstname">
	</div>
	<div class="col-25">
		Last Name: 
	</div>
	<div class="col-25">
		<input type="text" name="lastname">
	</div>
	<div class="col-25">
		Status: 
	</div>
	<div class="col-25">
		<select name="status">
			<option value="Checked In">Checked In</option>
			<option value="Waiting on Parts">Waiting on Parts</option>
			<option value="In Paint">In Paint</option>
			<option value="In Service">In Service</option>
			<option value="Waiting on Lift">Waiting on Lift</option>
			<option value="Awaiting Deposit">Awaiting Deposit</option>
			<option value="Ready For Pickup">Ready For Pickup</option>
		</select>
	</div>
	<div class="col-25">
		E-mail: 
	</div>
	<div class="col-75">	
		<input type="text" name="email">
	</div>
	<div class="col-25">
		Bike Vin #: 
	</div>
	<div class="col-75">
		<input type="text" name="vin">
	</div>
	<div class="col-25">
		Select image to upload: 
	</div>
	<div class="col-75">
	  <input type="file" name="image1"/>
    </div>
	<div class="col-25">
		Select image to upload: 
	</div>
	<div class="col-75">
	  <input type="file" name="image2"/>
    </div>
	  <div class="col-25">
		Select image to upload: 
	</div>
	<div class="col-75">
	  <input type="file" name="image3"/>
    </div>
	  <div class="col-25">
		Select image to upload: 
	</div>
	<div class="col-75">
	  <input type="file" name="image4"/>
    </div>
	
	<div class="col-25">
Comment: 
	</div>
	<div class="col-75">
	<textarea name="description" rows="5" cols="40"></textarea>
	</div>
	  <div class="row">
      <input type="submit" value="Submit">
	</div>
	  </form>
<?php include "includes/footer.php"; ?>

<?php
  // Create database connection
  include "includes/connect.php";
  $db = $con;

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="index.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>
