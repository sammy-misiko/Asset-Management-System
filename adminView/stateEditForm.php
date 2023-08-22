<div class="container p-5">

<h4>Edit Asset Condition</h4>
<?php
    include_once "../config/dbconnect.php";
	$serialno = $_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from storage Where serialno ='$serialno'");
	$numberOfRow = mysqli_num_rows($qry);
	if($numberOfRow > 0){
		while($row1 = mysqli_fetch_array($qry)){
    
?>
<form id="update-Items" action="./controller/updateStateController.php" method="POST" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" name="serialno" value="<?=$row1['serialno']?>" hidden>
    </div>
    
    <div class="form-group">
        <label for = "name">Name:</label>
        <input type="text" class="form-control" name="name" value="<?=$row1['a_name']?>" >
    </div>

    <div class="form-group">
        <label for="state">Condition:</label>
        <select name ="state" class="form-control" required>
            <option value="" disabled selected>Select New State</option>
            <option value="working">Working</option>
            <option value="Faulty">Faulty</option>
            <option value="Repair">Need_Repair</option>
            <option value="Disposal">Marked_for_disposal</option>
        </select>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update State</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>