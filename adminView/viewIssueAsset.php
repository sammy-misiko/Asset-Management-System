<?php
      include_once "../config/dbconnect.php";
?>

<div>
    <h4 class="modal-title">Asset Issuance Form</h4>

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
        <option value="" disabled selected>Select serialno</option>
            
        </select>
    </div>
    <div class="form-group">
        <label for="state">Condition:</label>
        <select id="state" name="state" class="form-control" required>
        <option value="" disabled selected>Select Condition</option>
        
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Issue Device</button>
    </div>
</form>
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



  $(document).ready(function() {
    // Function to update the "Received From" dropdown based on the selected "Received By" value
    function updateReceivedFromDropdown(selectedValue) {
      $.ajax({
        url: './controller/dynamicDrop.php', // Create a separate PHP file to fetch the options dynamically
        method: 'POST',
        data: { serial: selectedValue },
        success: function(data) {
          $('#state').html(data);
        },
        error: function() {
          alert('Error while fetching options.');
        }
      });
    }

    // Call the function initially to set the options for the "Received From" dropdown
    updateReceivedFromDropdown($('#serial').val());

    // Attach event listener to the "Received By" dropdown to update the "Received From" dropdown when its value changes
    $('#serial').on('change', function() {
      updateReceivedFromDropdown($(this).val());
    });
  });
  </script>
