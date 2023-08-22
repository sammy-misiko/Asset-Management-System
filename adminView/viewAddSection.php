<?php
      include_once "../config/dbconnect.php";
?>

<form  enctype='multipart/form-data' action="./controller/addSectionController.php" method="POST">
    <div class="form-group">
        <label for="section">Section Name:</label>
        <input type="text" class="form-control" name="section" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Section</button>
    </div>
</form>