
<div >
  <h2>Assets Issued To Users </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Asset Name</th>
        <th class="text-center">Model </th>
        <th class="text-center">Serial No.</th>
        <th class="text-center">Allocated To</th>
        <th class="text-center">Condition</th>
        <th class="text-center">Department</th>
        <th class="text-center">StaffNo/ID</th>
        <th class="text-center">Asset_Tag</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from asset_register";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["Asset_Name"]?></td>
      <td><?=$row["Model"]?></td>
      <td><?=$row["SerialNo"]?></td>
      <td><?=$row["Allocated_To"]?></td>
      <td><?=$row["Condition"]?></td>
      <td><?=$row["Department"]?></td>
      <td><?=$row["StaffNo/ID"]?></td>
      <td><?=$row["Asset_Tag"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>