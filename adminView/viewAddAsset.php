<?php
      include_once "../config/dbconnect.php";
?>


<form  enctype='multipart/form-data' action="./controller/addAssetController.php" method="POST">
           
    <div class="form-group">
        <label for="name">Asset Type</label>
        <select name="name" class="form-control" required>
        <option value="" disabled selected>Select Condition</option>
        <option value="Monitor">Monitor</option>
        <option value="CPU">CPU</option>
        <option value="Switch">SWITCH</option>
        <option value="Printer">Printer</option>
        <option value="Phone">IP Phone</option>
        <option value="Router">Router</option>
        <option value="UPS">UPS</option>
        <option value="Phone">IP Phone</option>
        </select>
    </div>

    <div class="form-group">
        <label for="lname">Model:</label>
        <input type="text" class="form-control" name="model" required>
    </div>
    <div class="form-group">
        <label for="staffno">Serial No:</label>
        <input type="text" class="form-control" name="serialno" required>
    </div>
    <div class="form-group">
        <label for="state">Condition:</label>
        <select name="state" class="form-control" required>
        <option value="" disabled selected>Select Condition</option>
        <option value="working">Working</option>
        <option value="Faulty">Faulty</option>
        <option value="Repair">Need_Repair</option>
        <option value="Disposal">Marked_for_disposal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tag">Asset Tag:</label>
        <input type="text" class="form-control" name="assettag" >
    </div>

    <div class="form-group">
        <label for="region">Source</label>
        <select id="region" name="region" class="form-control" required>
        <option value="" disabled selected>Select Source</option>
        <option value="Western">Western</option>
        <option value="Headquarters">HQ</option>
        <option value="Project">Project</option>
        <option value="other">Other Regions</option>
        </select>
    </div>
    <div class="form-group">
        <label for="p_type">Project Type</label>
        <input type="text" class="form-control" id="p_type" name="p_type" required>
    </div>
    <div class="form-group">
        <label for="supplier">Supplier</label>
        <input type="text" class="form-control" id="supplier" name="supplier" required>
    </div>
    <div class="form-group">
        <label for="price">Purchase Price</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="p_date">Purchase Date</label>
        <input type="date" class="form-control" id="p_date" name="p_date" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Asset</button>
    </div>
</form>


<script>
  $(document).ready(function() {
    // Function to toggle the visibility of fields based on the selected region
    function toggleFieldsVisibility(selectedRegion) {
      if (selectedRegion === 'Western') {
        $('#supplier').show();
        $('#p_date').show();
        $('#price').show();
      }
      else if(selectedRegion === 'Project')
      {
        $('#p_type').show();
     
      }
      else {
        // If no region selected or an unknown region selected, hide all fields
        $('#supplier').hide();
        $('#p_date').hide();
        $('#price').hide();
        $('#p_type').hide();
      }
    }

    // Call the function initially with the default value (empty string)
    toggleFieldsVisibility($('#region').val());

    // Attach event listener to the "Region" dropdown to update field visibility when its value changes
    $('#region').on('change', function() {
      toggleFieldsVisibility($(this).val());
    });
  });
</script>