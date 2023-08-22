<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $receivedby = $_POST['receivedby'];
        $receivedfrom = $_POST['receivedfrom'];
        $state = $_POST['state'];
        $location = $_POST['location'];
        $serialno = $_POST['serialno'];
       
         $insert = mysqli_query($conn,"INSERT INTO ISSUANCE (RECEIVEDBY, RECEIVEDFROM, STATE, SERIALNO, DATE, A_LOCATION)

         VALUES('$receivedby', '$receivedfrom', '$state', '$serialno', now(), '$location');");
 
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