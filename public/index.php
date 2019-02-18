<link rel="stylesheet" href="css/style.css">
<?php include "templates/header.php"; 
include "templates/password_protect.php"; 

?>
<form method="get" action="edit2.php"enctype="multipart/form-data">
<div class="row">     
        <div class="col-25">
            <label for="editid">Ticket number or select below</label>
        </div>
        <div class="col-75">
            <input type="text" name="editid" id="editid">
        </div>
    </div> 
    <div class="row">
        <input type="submit" value="Submit">
    </div>
        </form>

<a href="create.php" class="linkbutton"><strong>Create</strong></a></li>
<a href="read.php" class="linkbutton"><strong>Read</strong></a></li>
<a href="edit.php" class="linkbutton"><strong>Edit</strong></a></li>


<?php include "templates/footer.php"; ?>