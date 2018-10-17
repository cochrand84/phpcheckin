<!doctype html>
<html>
<?php include "includes/header.php"; ?>
<body>
<form action="includes/upload.php" method="post">
  <div class="row">
  	<div class="col-25">
		Current date is: 
	</div>
	<div class="col-25">
		<input type="date" name="check_in_date" value="<?php include "includes/time_adjustment.php"; ?>" readonly="readonly">
	</div>
	<div class="col-25">
		Due date is: 
	</div>
	<div class="col-25">
		<input type="date" name="due_date" value="" min="<?php include "includes/time_adjustment.php"; ?>">
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
			<option value="Awaiting Parts">Awaiting Parts</option>
			<option value="In Paint">In Paint</option>
			<option value="Awaiting Payment/Pickup">Awaiting Payment/Pickup</option>
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
	<textarea name="description" rows="5" cols="40"></textarea>
	</div>
	  <div class="row">
      <input type="submit" value="Submit">
	</div>
	  </form>
<?php include "includes/footer.php"; ?>
</body>
</html>
