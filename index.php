<!doctype html>
<html><!-- InstanceBegin template="/Templates/tmp1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Index PHPCheckin 0.01</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>

<body>
<!-- InstanceBeginEditable name="Form" -->
Name: <input type="text" name="name" value="<?php echo $name;?>">
	</p>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
</p>
Bike Vin #: <input type="text" name="vin" value="<?php echo $vin;?>">
	</p>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</p>
Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
