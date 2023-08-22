
<div >
  <div><h2>Issue Asset Transaction</h2></div>
  <div>
    <a href="#" data-toggle="modal" data-target="#myModal">Issue Asset</a>
  </div>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Date</th>
        <th class="text-center">Issued By</th>
        <th class="text-center">Issued To </th>
        <th class="text-center">Department</th>
        <th class="text-center">Asset_Name</th>
        <th class="text-center">Model</th>
        <th class="text-center">Serial No.</th>
        <th class="text-center">Condition</th>
        <th class="text-center">Asset_Tag</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from issuance_regista";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["Date"]?></td>
      <td><?=$row["IssuedBy"]?></td>
      <td><?=$row["Issued_To"]?></td>
      <td><?=$row["Department"]?></td>
      <td><?=$row["Asset_Name"]?></td>
      <td><?=$row["Model"]?></td>
      <td><?=$row["SerialNo"]?></td>
      <td><?=$row["Condition"]?></td>
      <td><?=$row["Asset_Tag"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>

  <!-- Trigger the modal with a button --
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Issue Device
  </button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Asset Issuance Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/issueAssetController.php" method="POST">
            <div class="form-group">
              <label for="issuedby">Issued By:</label>
              <select id="issuedby" name="issuedby" class="form-control" required>
                <option value="" disabled selected></option>
                  <?php
                    $sql= "SELECT * FROM users where depname = 'ICT'";
                    $result = $conn-> query($sql);
                    if ($result-> num_rows > 0){
                      while($row = $result-> fetch_assoc()){
                        echo"<option value='". $row['username'] ."'>"  .$row['username'] ."</option>";
                      }
                    }
                  ?>
                </select>
            </div>
            <div class="form-group">
              <label for="issuedto">Issued To:</label>
              <select id="issuedto" name="issuedto" class="form-control" required>
                <option value="" disabled selected></option>
            
                </select>
            </div>

            <div class="form-group">
              <label>Category:</label>
                <select id="category" class="form-control" required>
                <option value="" disabled selected>Select Category</option>
                  <?php
                    $sql= "SELECT DISTINCT name FROM assets";

                    $result = $conn-> query($sql);
                    if ($result-> num_rows > 0){
                      while($row = $result-> fetch_assoc()){
                        echo"<option value='". $row['name'] ."'>"  .$row['name'] ."</option>";
                      }
                    }
                  ?>
                </select>
            </div>
            
            <div class="form-group">
              <label>Serial No:</label>
                <select id="serial" name="serialno" class="form-control" required>
                <option value="" selected>Select Serialno</option>
                  
                </select>
            </div>
            <div class="form-group">
              <label for="state">Condition:</label>
              <select name="state" class="form-control" required>
                <option value="" disabled selected>Select Condition</option>
                <option value="working" selected>Working</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Issue Device</button>
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


  <script>
  $(document).ready(function() {
    // Function to update the "Received From" dropdown based on the selected "Received By" value
    function updateReceivedFromDropdown(selectedValue) {
      $.ajax({
        url: './controller/dynamicDrop.php', // Create a separate PHP file to fetch the options dynamically
        method: 'POST',
        data: { issuedby: selectedValue },
        success: function(data) {
          $('#issuedto').html(data);
        },
        error: function() {
          alert('Error while fetching options.');
        }
      });
    }

    // Call the function initially to set the options for the "Received From" dropdown
    updateReceivedFromDropdown($('#issuedby').val());

    // Attach event listener to the "Received By" dropdown to update the "Received From" dropdown when its value changes
    $('#issuedby').on('change', function() {
      updateReceivedFromDropdown($(this).val());
    });
  });


  $(document).ready(function() {
    // Function to update the "Received From" dropdown based on the selected "Received By" value
    function updateReceivedFromDropdown(selectedValue) {
      $.ajax({
        url: './controller/dynamicDrop.php', // Create a separate PHP file to fetch the options dynamically
        method: 'POST',
        data: { category: selectedValue },
        success: function(data) {
          $('#serial').html(data);
        },
        error: function() {
          alert('Error while fetching options.');
        }
      });
    }

    // Call the function initially to set the options for the "Received From" dropdown
    updateReceivedFromDropdown($('#category').val());

    // Attach event listener to the "Received By" dropdown to update the "Received From" dropdown when its value changes
    $('#category').on('change', function() {
      updateReceivedFromDropdown($(this).val());
    });
  });
  </script>