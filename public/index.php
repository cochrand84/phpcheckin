<link rel="stylesheet" href="css/style.css">
<?php include "templates/header.php"; 
include "templates/password_protect.php"; 

?>
<form method="get" action="search.php"enctype="multipart/form-data">
<div class="row">     
        <div class="col-25">
            <label for="searchvalue">Search:</label>
        </div>
        <div class="col-25">
            <input type="text" name="searchvalue" id="searchvalue">
        </div>
    </div> 
    <div class="row">
        <input type="submit" value="Search">
    </div>
        </form>
<a href="create.php" class="linkbutton"><strong>Create</strong></a></li>
<a href="edit.php" class="linkbutton"><strong>Edit</strong></a></li>


<?php include "templates/footer.php"; ?>