<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css_final.css">
    <link rel="stylesheet" type=" text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type=" text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type=" text/css" href="./assets/css/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" type=" text/css" href="./assets/css/colReorder.dataTables.min.css">
    <link rel="stylesheet" type=" text/css" href="./assets/css/dateTime.min.css">
    
    <!-- <link rel="stylesheet" href="./css-1.css"> -->
    <title>Fixed Assets table</title>
</head>
<body>
<div >
  <h3>Assets Issuance Reports</h3>
  <table id="emp-tabl" class="table ">
    <thead>
    <tr>
        <!--<th col-index = 1 class="text-center">No.</th>-->

        <th col-index = 2 class="text-center">Date</th>

        <th col-index = 3 class="text-center">Issued By</th>

        <th col-index = 4 class="text-center">Issued To</th>

        <th col-index = 5 class="text-center">Department</th>

        <th col-index = 6 class="text-center">Asset_Name</th>

        <th col-index = 7 class="text-center">Model</th>

        <th col-index = 8 class="text-center">Serial No.</th>

        <th col-index = 9 class="text-center">Condition</th>

        <th col-index = 10 class="text-center">Asset_Tag</th>
      </tr>
      
    </thead>
    <tbody>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from issuance_regista";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <!--<td><</td>-->
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
      </tbody>
  </table>

</div>
</body>

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
    <script type = "text/javascript" src="./assets/js/searchBuilder.min.js"></script>
    <script type = "text/javascript" src="./assets/js/colReorder.min.js"></script>
    <script type = "text/javascript" src="./assets/js/dateTime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="./filter.js"></script>
</html>