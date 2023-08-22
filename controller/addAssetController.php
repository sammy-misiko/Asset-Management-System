<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $a_name = $_POST['name'];
        $a_model = $_POST['model'];
        $serial_no = $_POST['serialno'];
        $a_state = $_POST['state'];
        $a_tag = $_POST['assettag'];
        $region = $_POST['region'];
        $supplier = $_POST['supplier'];
        $price = $_POST['price'];
        $p_date = $_POST['p_date'];
        $p_type = $_POST['p_type'];
       
         $insert = mysqli_query($conn,"INSERT INTO assets
         (name, model, serialno, state, assettag, region_from, received_date, supplier, purchase_price, purchase_date, project_type) 
         VALUES ('$a_name', '$a_model', '$serial_no','$a_state', '$a_tag', '$region', now(), '$supplier', '$price', '$p_date', '$p_type')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             //header("Location: ../dashboard.php?users=error");
             
             header("Location: ../home.php");
             
         }
         else
         {
             echo "Asset added successfully.";
             //header("Location: ../dashboard.php?users=success");
             header("Location: ../home.php");
        
         }
     
    }
        
?>