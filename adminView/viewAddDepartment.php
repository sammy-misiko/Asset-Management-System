<?php
      include_once "../config/dbconnect.php";
?>

<form  enctype='multipart/form-data' action="./controller/addDepartmentController.php" method="POST">
    <div class="form-group">
        <label for="depname">Department Name:</label>
        <input type="text" class="form-control" name="depname" required>
    </div>
    <div class="form-group">
        <label>Directorate:</label>
        <select name="section" class="form-control" required>
        <option value="" disabled selected>Select Directorate</option>
            <?php
            $sql="SELECT * from t_section";
            $result = $conn-> query($sql);
            if ($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                echo"<option value='". $row['section'] ."'>"  .$row['section'] ."</option>";
                }
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Department</button>
    </div>
</form>