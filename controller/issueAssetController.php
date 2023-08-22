<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $issuedby = $_POST['issuedby'];
        $issuedto = $_POST['issuedto'];     
        $state = $_POST['state'];
        $serialno = $_POST['serialno'];
       
         $insert = mysqli_query($conn,"INSERT INTO ISSUANCE (ISSUEDBY, ISSUEDTO, STATE, SERIALNO, DATE)

         VALUES('$issuedby', '$issuedto', '$state', '$serialno', now());");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             //header("Location: ../dashboard.php?users=error");
             header("Location: ../home.php");
         }
         else
         {
             echo "Asset Issued successfully.";
             //header("Location: ../dashboard.php?users=success");
             header("Location: ../home.php");
         }
     
    }
        
?>


