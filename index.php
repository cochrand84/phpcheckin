<!doctype html>
<html><!-- InstanceBegin template="/Templates/tmp1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
	<link rel="stylesheet" href="main.css">
	<?php $ver = "0.05.5";?>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Index PHPCheckin <?php echo $ver;?></title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>

<body>
<!-- InstanceBeginEditable name="Body" -->
<form action="upload.php">
  <div class="row">
    <div class="col-25">
		Current time and date is: 
	</div>
	<div class="col-75">
		<input type="text" name="current_date" value="<?php echo date('H:i:s M d, Y'); ?>" readonly="readonly">
	</div>
	<div class="col-25">
		Name: 
	</div>
	<div class="col-75">
		<input type="text" name="name" value="<?php echo $name;?>">
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
<!-- InstanceEndEditable -->
</p>
PHPCheckin Version: <?php echo $ver;?>
	</p>

<form>
<input type="button" value="Login" onclick="window.location.href='login.php'" />
</form>
<form>
<input type="button" value="Logout" onclick="window.location.href='logout.php'" />
</form>

</body>

<!-- InstanceEnd --></html>
