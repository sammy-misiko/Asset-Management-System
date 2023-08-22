
<div >
  <h3>All Department</h3>
  <!--div>
    <a href="#" data-toggle="modal" data-target="#myModal">Add Department</a>
  </div-->
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Directorate</th>
        <th class="text-center">Department Name</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from department";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["section"]?></td> 
      <td><?=$row["depname"]?></td>  
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><button class="btn btn-danger" style="height:40px" onclick="depDelete('<?=$row['depname']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button --
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Department
  </button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
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

            <!--div class="form-group">
              <label for="section">Directorate</label>
              <select name="section" class="form-control" required>
                <option value="" disabled selected></option>
                <option value="Corporate">Corporate Services</option>
                <option value="Maintenance">Maintenance</option>
                <option value="PPP">Public Private Partnership</option>
                <option value="Development">Development</option>
                <option value="HDS">Highway, Design and Safety</option>
                <option value="PRC">Planning, Research and Compliance</option>
                <option value="SCM">Supply Chain Management</option>
                <option value="Audit">Audit Services</option>
              </select>
            </div-->
            
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Department</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   