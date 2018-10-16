<!doctype html>
<html><!-- InstanceBegin template="/Templates/tmp1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
	<link rel="stylesheet" href="main.css">
	<?php $ver = ".03";?>
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
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select clutch side image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</p>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select brake side image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</p>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select front image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</p>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select back image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</p>
<div class="row">
      <input type="submit" value="Submit">
</div>
Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
<!-- InstanceEndEditable -->
</p>
<?php echo $ver;?>
</body>
<!-- InstanceEnd --></html>
