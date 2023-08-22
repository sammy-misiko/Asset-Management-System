
<div >
  <h2>Recall Assets Transaction</h2>
  <div>
    <a href="#" data-toggle="modal" data-target="#myModal">Recall Asset</a>
  </div>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Date Received</th>
        <th class="text-center">Receiver</th>
        <th class="text-center">Returned By </th>
        <th class="text-center">Condition</th>
        <th class="text-center">Department</th>
        <th class="text-center">Serial No.</th>
        
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from recall_view";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["DATE_RECEIVED"]?></td>
      <td><?=$row["RECEIVER"]?></td>
      <td><?=$row["RETURNED BY"]?></td>
      <td><?=$row["CONDITION"]?></td>
      <td><?=$row["DEPARTMENT"]?></td>
      <td><?=$row["SERIAL NO"]?></td>
      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>

  <!-- Trigger the modal with a button --
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Recall Device
  </button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Asset Recall Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/recallAssetController.php" method="POST">
            <div class="form-group">
              <label for="receivedby">Received By:</label>

              <select name="receivedby" class="form-control" required>
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
              <label for="receivedfrom">Received From:</label>
              <select id="receivedfrom" name="receivedfrom" class="form-control" required>
                <option value="" disabled selected></option>
                  <?php
                    $sql= "SELECT * FROM users";
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
              <label>Category</label>
                <select id="asset_category" class="form-control" required>
                <option value="" disabled selected>Select Category</option>
                
                </select>
            </div>

            <div class="form-group">
              <label>Serial No:</label>
                <select id="asset_serialno" name="serialno" class="form-control" required>
                <option value="" disabled selected>Select SerialNo</option>
                
                
                </select>
            </div>
            <div class="form-group">
              <label for="state">Comment:</label>
              <select name="state" class="form-control" required>
                <option value="" disabled selected></option>
                <option value="Working">Reissue</option>
                <option value="Faulty">Faulty</option>
                <option value="Repair">Need_Repair</option>
                <option value="Disposal">Marked_for_disposal</option>
              </select>
            </div>
            <div class="form-group">
              <label for="location">Location:</label>
              <select name="location" class="form-control" required>
                <option value=""></option>
                <option value="storage" selected>storage</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Recall Device</button>
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
        data: { receivedfrom: selectedValue },
        success: function(data) {
          $('#asset_category').html(data);
        },
        error: function() {
          alert('Error while fetching options.');
        }
      });
    }

    // Call the function initially to set the options for the "Received From" dropdown
    updateReceivedFromDropdown($('#receivedfrom').val());

    // Attach event listener to the "Received By" dropdown to update the "Received From" dropdown when its value changes
    $('#receivedfrom').on('change', function() {
      updateReceivedFromDropdown($(this).val());
    });
  });




    $(document).ready(function() {
    // Function to update the "Received From" dropdown based on the selected "Received By" value
    function updateFromDropdown(selectedValue) {
      $.ajax({
        url: './controller/dynamicDrop.php', // Create a separate PHP file to fetch the options dynamically
        method: 'POST',
        data: { asset_category: selectedValue },
        success: function(data) {
          $('#asset_serialno').html(data);
        },
        error: function() {
          alert('Error while fetching options.');
        }
      });
    }

    // Call the function initially to set the options for the "Received From" dropdown
    updateFromDropdown($('#asset_category').val());

    // Attach event listener to the "Received By" dropdown to update the "Received From" dropdown when its value changes
    $('#asset_category').on('change', function() {
      updateFromDropdown($(this).val());
    });
  });
  </script>