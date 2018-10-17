<!doctype html>
<html>
<?php include "includes/header.php"; ?>
<body>
<form action="includes/upload.php" method="post">
  <div class="row">
  	<div class="col-25">
		Current time and date is: 
	</div>
	<div class="col-25">
		<input type="date" name="check_in_date" value="<?php include "includes/time_adjustment.php"; ?>" readonly="readonly">
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
<?php include "includes/footer.php"; ?>
</body>
</html>
