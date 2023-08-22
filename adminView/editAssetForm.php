<div class="container p-5">

<h4>Edit Asset Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$serialno = $_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from assets Where serialno ='$serialno'");
	$numberOfRow = mysqli_num_rows($qry);
	if($numberOfRow > 0){
		while($row1 = mysqli_fetch_array($qry)){
    
?>
<form id="update-Items" onsubmit="updateAssets()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="serialno" value="<?=$row1['serialno']?>" hidden>
    </div>
    
    <div class="form-group">
        <label for = "name">Name:</label>
        <input type="text" class="form-control" id="name" value="<?=$row1['name']?>" >
    </div>
    <div class="form-group">
        <label for = "model">Model:</label>
        <input type="text" class="form-control" id="model" value="<?=$row1['model']?>" >
    </div>
    <!--div class="form-group">
        <label for = "state">Condition:</label>
        <input type="text" class="form-control" id="state" value=""  >
    </div-->
    <div class="form-group">
              <label for="state">Condition:</label>
              <select id="state" class="form-control" required>
                <option value="" disabled selected>Select Condition</option>
                <option value="working">Working</option>
                <option value="Faulty">Faulty</option>
                <option value="Repair">Need_Repair</option>
                <option value="Disposal">Marked_for_disposal</option>
              </select>
    </div>
 
    <div class="form-group">
        <label for = "tag">Asset Tag:</label>
        <input type="text" class="form-control" id="tag" value="<?=$row1['assettag']?>" >
    </div>
    <div class="form-group">
        <label for = "tag">Region From</label>
        <input type="text" class="form-control" id="region" value="<?=$row1['region_from']?>" >
    </div>
    <div class="form-group">
        <label for = "tag">Supplier</label>
        <input type="text" class="form-control" id="supplier" value="<?=$row1['supplier']?>" >
    </div>
    <div class="form-group">
        <label for = "tag">Purchase Price</label>
        <input type="number" class="form-control" id="p_price" value="<?=$row1['purchase_price']?>" >
    </div>
    <div class="form-group">
        <label for = "tag">Purchase Date</label>
        <input type="date" class="form-control" id="p_date" value="<?=$row1['purchase_date']?>" >
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Asset</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>