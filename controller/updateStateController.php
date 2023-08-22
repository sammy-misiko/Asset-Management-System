<?php
    include_once "../config/dbconnect.php";

    $serialno = $_POST['serialno'];
    $state= $_POST['state'];

   
    $updateState = mysqli_query($conn, "UPDATE storage SET
        state = '$state' 
        WHERE serialno = '$serialno'");

        //mysqli_query($conn, "UPDATE assets SET
        //model = $model 
        //WHERE serialno = $serialno");


    if($updateState)
    {
        echo "true";
        header("Location: ../home.php");
    }
    else
    {
        echo "Nothing happened";
    }
?>
