<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <link rel="stylesheet" href="./css_final.css">
  <link rel="stylesheet" type=" text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type=" text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
</head>
<body>

<div >
  <h3>All Assets</h3>
  <!--div>
    <a href="#" data-toggle="modal" data-target="#myModal">Add Asset</a>
  </div-->
  <table id="emp_asset" class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Model</th>
        <th class="text-center">Serial No.</th>
        <th class="text-center">Condition</th>
        <th class="text-center">Asset Tag</th>
        <th class="text-center">Region From</th>
        <th class="text-center">Received Date</th>
        <th class="text-center">Supplier</th>
        <th class="text-center">Purchase Price</th>
        <th class="text-center">Purchase Date</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from assets";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?> </td>
      <td><?=$row["model"]?></td>
      <td><?=$row["serialno"]?></td>
      <td><?=$row["state"]?></td>
      <td><?=$row["assettag"]?></td>
      <td><?=$row["region_from"]?></td>
      <td><?=$row["received_date"]?></td>
      <td><?=$row["supplier"]?></td>
      <td><?=$row["purchase_price"]?></td>
      <td><?=$row["purchase_date"]?></td>
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><button class="btn btn-primary" style="height:40px" onclick="assetEditForm('<?=$row['serialno']?>')">Edit</button></td>
      <!--<td><button class="btn btn-danger" style="height:40px" onclick="assetDelete">Delete</button></td>-->
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button --
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Asset
  </button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Asset</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
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

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script type = "text/javascript" src="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"></script>
    <script type = "text/javascript" src="./assets/css/dataTables.min.css"></script>
    <script type = "text/javascript" src="./assets/js/jquery.dataTables.min.js"></script>
    <script type = "text/javascript" src="./assets/js/buttons.min.js"></script>
    <script type = "text/javascript" src="./assets/js/jszip.min.js"></script>
    <script type = "text/javascript" src="./assets/js/pdfmake.min.js"></script>
    <script type = "text/javascript" src="./assets/js/vfs_fonts.js"></script>
    <script type = "text/javascript" src="./assets/js/html5.min.js"></script>
    <script type = "text/javascript" src="./assets/js/print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="./filter.js"></script>
</body>
