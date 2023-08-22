<?php
include_once "../config/dbconnect.php";
// Assuming you have already established a database connection

if (isset($_POST['receivedfrom'])) {
  $receivedfrom = $_POST['receivedfrom'];

  // Prepare and execute your SQL query to get the "Received From" options based on the selected "Received By"
  // For example:
   //$sql = "SELECT * FROM asset_reg WHERE issuedto = '$receivedfrom'";
   $sql = "SELECT DISTINCT a.name FROM assets a, asset_reg ar WHERE ar.serialno = a.serialno AND ar.issuedto = '$receivedfrom'";
   $result = $conn->query($sql);

   $options = array();

    if ($result && $result->num_rows > 0) {
    // Loop through the fetched data and add options to the $options array
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
    }
    }

  echo $options;
}


if (isset($_POST['asset_category'])) {
  $category = $_POST['asset_category'];

  // Prepare and execute your SQL query to get the "Received From" options based on the selected "Received By"
  // For example:
   $sql = "SELECT * FROM asset_reg WHERE asset_reg.name = '$category'";

   $result = $conn->query($sql);

   $options = array();

    if ($result && $result->num_rows > 0) {
    // Loop through the fetched data and add options to the $options array
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['serialno'] . '">' . $row['serialno'] . '</option>';
    }
    }

  echo $options;
}



if (isset($_POST['issuedby'])) {
    $issuedby = $_POST['issuedby'];
  
    // Prepare and execute your SQL query to get the "Received From" options based on the selected "Received By"
    // For example:
     $sql = "SELECT * FROM users WHERE username != '$issuedby'";
     $result = $conn->query($sql);
  
     $options = array();
  
      if ($result && $result->num_rows > 0) {
      // Loop through the fetched data and add options to the $options array
      while ($row = $result->fetch_assoc()) {
          $options .= '<option value="' . $row['username'] . '">' . $row['username'] . '</option>';
      }
      }
  
    echo $options;
  }


if (isset($_POST['category'])) {
    $category = $_POST['category'];
  
    // Prepare and execute your SQL query to get the "Received From" options based on the selected "Received By"
    // For example:
     $sql = "SELECT * FROM assets WHERE state IN ('Working', 'Disposal', 'Repair') AND name = '$category'
            AND NOT EXISTS (
            SELECT *
            FROM asset_reg
            WHERE asset_reg.serialno = assets.serialno
            )";

     $result = $conn->query($sql);
  
     $options = array();
  
      if ($result && $result->num_rows > 0) {
      // Loop through the fetched data and add options to the $options array
      while ($row = $result->fetch_assoc()) {
          $options .= '<option value="' . $row['serialno'] . '">' . $row['serialno'] . '</option>';
      }
      }
  
    echo $options;
  }


  if(isset($_POST['username']))
  {
      $username = $_POST['username'];
 

      $query = "SELECT username FROM user_login WHERE username = '$username'";
      $stmt = $conn-> query($query);

      if($stmt-> num_rows > 0)
      {
          echo "exists";
      }else{
          echo "available";
      }

  }

  if (isset($_POST['serial'])) {
    $serial = $_POST['serial'];
  
    // Prepare and execute your SQL query to get the "Received From" options based on the selected "Received By"
    // For example:
     $sql = "SELECT * FROM assets WHERE serialno = '$serial'";

     $result = $conn->query($sql);
  
     $options = array();
     
  
      if ($result && $result->num_rows > 0) {
      // Loop through the fetched data and add options to the $options array
      while ($row = $result->fetch_assoc()) {
          $options .= '<option value="' . $row['state'] . '">' . $row['state'] . '</option>';
      }
      }
  
    echo $options;
  }

?>


