<?php

    include_once "../config/dbconnect.php";
    
    $serial_no=$_POST['record'];
    $query="DELETE FROM assets where serialno ='$serial_no'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Asset Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>