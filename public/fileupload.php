<?php
    $year = date("Y");
    $month = date("M");

    if (!file_exists('uploads/'$year'/'$month'/')) {
        mkdir('uploads/'$year'/'$month'/', 0777, true);
    }
    $currentDir = getcwd();
    $uploadDirectory = "/uploads/$year/$month/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));
    $rand = rand();
    $randfileName = $rand . basename($fileName);
    $uploadPath = $currentDir . $uploadDirectory . $randfileName; 
    $imgpath = "." . $uploadDirectory . $randfileName;

    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                echo "The file " . $randfileName . " has been uploaded to " . $imgpath;
                ?><img src="<?php echo $imgpath;?>" alt="<?php echo $imgpath; ?>" height="100" width="100">
                <?php
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }


?>