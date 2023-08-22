<?php

    include_once "../config/dbconnect.php";
    
    $depname=$_POST['record'];
    $query="DELETE FROM department where depname ='$depname'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Asset Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>