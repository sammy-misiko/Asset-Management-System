<?php
    include_once "../config/dbconnect.php";

    $serialno = $_POST['serialno'];
    $name= $_POST['name'];
    $model= $_POST['model'];
    $state= $_POST['state'];
    $tag= $_POST['tag'];
    $region= $_POST['region'];
    $supplier= $_POST['supplier'];
    $p_price= $_POST['p_price'];
    $p_date= $_POST['p_date'];
   
    $updateAsset = mysqli_query($conn, "UPDATE assets SET
        name = '$name',
        model = '$model',
        state = '$state',
        assettag = '$tag' ,
        region_from = '$region',
        supplier = '$supplier',
        purchase_price = '$p_price',
        purchase_date = '$p_date'
        WHERE serialno = '$serialno'");

        //mysqli_query($conn, "UPDATE assets SET
        //model = $model 
        //WHERE serialno = $serialno");


    if($updateAsset)
    {
        echo "true";
    }
    else
    {
        echo "Nothing happened";
    }
?>
