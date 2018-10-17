<!doctype html>
<html>
<?php include "includes/header.php"; ?>
<?php include "includes/record_number.php"; ?>
<body>
<form action="upload.php">
  <div class="row">
  	<div class="col-25">
		Record number: 
	</div>
	<div class="col-25">
		<input type="text" name="record_number" value="<?php echo $new_record_number;?>"readonly="readonly">
	</div>
    <div class="col-25">
		Current time and date is: 
	</div>
	<div class="col-25">
		<input type="text" name="check_in_date" value="<?php echo date('H:i:s M d, Y'); ?>" readonly="readonly">
	</div>
	<div class="col-25">
		First Name: 
	</div>
	<div class="col-25">
		<input type="text" name="firstname" value="<?php echo $firstname;?>">
	</div>
	<div class="col-25">
		Last Name: 
	</div>
	<div class="col-25">
		<input type="text" name="lastname" value="<?php echo $lastname;?>">
	</div>
	<div class="col-25">
		E-mail: 
	</div>
	<div class="col-75">	
		<input type="text" name="email" value="<?php echo $email;?>">
	</div>
	<div class="col-25">
		Bike Vin #: 
	</div>
	<div class="col-75">
		<input type="text" name="vin" value="<?php echo $vin;?>">
	</div>
	<div class="col-25">
		Select image to upload: 
	</div>
	<div class="col-75">
	  <input type="file" name="image">
    </div>
	<div class="col-25">
		Select image to upload: 
	</div>
	<div class="col-75">
	  <input type="file" name="image">
    </div>
	  <div class="col-25">
		Select image to upload: 
	</div>
	<div class="col-75">
	  <input type="file" name="image">
    </div>
	  <div class="col-25">
		Select image to upload: 
	</div>
	<div class="col-75">
	  <input type="file" name="image">
    </div>
	
	<div class="col-25">
Comment: 
	</div>
	<div class="col-75">
	<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
	</div>
	  <div class="row">
      <input type="submit" value="Submit">
	</div>
	  </form>
<?php include "includes/header.php"; ?>
</body>
</html>
