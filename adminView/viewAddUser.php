<?php
      include_once "../config/dbconnect.php";
?>

<form enctype='multipart/form-data' onsubmit="addUser()" method="POST">
    <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" required>
    </div>
    <div class="form-group">

        <label>Department:</label>
        <select id="depname" class="form-control" required>
        <option value="" disabled selected>Select Department</option>
            <?php
            $sql="SELECT * from department";
            $result = $conn-> query($sql);
            if ($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                echo"<option value='". $row['depname'] ."'>"  .$row['depname'] ."</option>";
                }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="staffno">StaffNo/ID:</label>
        <input type="text" class="form-control" id="staffno" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add User</button>
    </div>
  
</form>