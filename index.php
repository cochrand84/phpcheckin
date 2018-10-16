<!doctype html>
<html><!-- InstanceBegin template="/Templates/tmp1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
	<link rel="stylesheet" href="main.css">
	<?php $ver = "0.04";?>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Index PHPCheckin <?php echo $ver;?></title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>

<body>
<!-- InstanceBeginEditable name="Form" -->
	
<input type="text" name="current_date" value="<?php echo date('H:i:s M d, Y'); ?>" readonly="readonly">
	
Name: <input type="text" name="name" value="<?php echo $name;?>">
	</p>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
</p>
Bike Vin #: <input type="text" name="vin" value="<?php echo $vin;?>">
	</p>
<form name="upload" action="upload.php" method="POST" enctype="multipart/form-data">
    Select image to upload: <input type="file" name="image">
    <input type="submit" name="upload" value="upload">
</form>
</p>
<form name="upload" action="upload.php" method="POST" enctype="multipart/form-data">
    Select image to upload: <input type="file" name="image">
    <input type="submit" name="upload" value="upload">
</form>
</p>
<form name="upload" action="upload.php" method="POST" enctype="multipart/form-data">
    Select image to upload: <input type="file" name="image">
    <input type="submit" name="upload" value="upload">
</form>
</p>
<form name="upload" action="upload.php" method="POST" enctype="multipart/form-data">
    Select image to upload: <input type="file" name="image">
    <input type="submit" name="upload" value="upload">
</form>
</p>
<div class="row">
      <input type="submit" value="Submit">
</div>
Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
<!-- InstanceEndEditable -->
</p>
PHPChecin Version: <?php echo $ver;?>
</body>
<!-- InstanceEnd --></html>
