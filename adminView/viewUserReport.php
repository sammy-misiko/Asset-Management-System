<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css_final.css">
    <link rel="stylesheet" type=" text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type=" text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    
    
    
    <script src=""></script>
    <!-- <link rel="stylesheet" href="./css-1.css"> -->
    <title>Users Report</title>
</head>

<body>
<div >
  <h3>Users Reports</h3>
 
  <table id="emp-table" class="table ">
    <thead>
      <tr>
        <!--<th col-index = 1 class="text-center">No.</th>-->

        <th col-index = 2 class="text-center">Username</th>

        <th col-index = 3 class="text-center">StaffNo/ID</th>

        <th col-index = 4 class="text-center">Department</th>

      </tr>
    </thead>
    <tbody>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from users";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      
      <td><?=$row["username"]?></td>
      <td><?=$row["staffno"]?></td> 
      <td><?=$row["depname"]?></td>  
      <!-- <td><button class="btn btn-primary" >Edit</button></td> --
      <td><button class="btn btn-danger" style="height:40px" onclick="userDelete('')">Delete</button></td>-->
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
      </tbody>
  </table>

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