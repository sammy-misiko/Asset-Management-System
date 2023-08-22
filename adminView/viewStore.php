<div >
  <h3>Assets Recalled From Users</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Serial No.</th>
        <th class="text-center">Comment</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from storage";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["a_name"]?> </td>
      <td><?=$row["serialno"]?></td>
      <td><?=$row["state"]?></td>
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><button class="btn btn-primary" style="height:40px" onclick="stateEditForm('<?=$row['serialno']?>')">Edit</button></td>
      <!--<td><button class="btn btn-danger" style="height:40px" onclick="assetDispose('')">Dispose</button></td>-->
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
