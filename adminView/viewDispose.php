
<div >
  <h3>Assets Marked For Disposal</h3>
  <div>
    <a href="#" onclick="assetDisposeAll()">Dispose All</a>
</div>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Model</th>
        <th class="text-center">Serial No.</th>
        <th class="text-center">Condition</th>
        <th class="text-center">Asset Tag</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from assets where state = 'Disposal'";
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
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><button class="btn btn-primary" style="height:40px" onclick="assetDispose('<?=$row['serialno']?>')">Dispose</button></td>
      <!--<td><button class="btn btn-danger" style="height:40px" onclick="assetDelete">Delete</button></td>-->
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

</div>