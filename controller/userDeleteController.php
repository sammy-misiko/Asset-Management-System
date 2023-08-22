<?php

    include_once "../config/dbconnect.php";
    
    $username = $_POST['record'];
    $query="DELETE FROM users where username ='$username'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"User Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>