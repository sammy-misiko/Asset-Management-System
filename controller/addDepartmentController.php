<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $depname = $_POST['depname'];
        $section = $_POST['section'];
       
         $insert = mysqli_query($conn,"INSERT INTO department
         (depname, section) 
         VALUES ('$depname', '$section')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             //header("Location: ../dashboard.php?users=error");
             header("Location: ../home.php");
         }
         else
         {
             echo "User added successfully.";
             //header("Location: ../dashboard.php?users=success");
             header("Location: ../home.php");
         }
     
    }
        
?>