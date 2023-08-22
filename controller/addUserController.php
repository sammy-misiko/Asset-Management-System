<?php
    include_once "../config/dbconnect.php";
    
    // if(isset($_POST['upload']))
    // {
       
    //     $uname = $_POST['uname'];
    //     $depname = $_POST['depname'];
    //     $staff_no = $_POST['staffno'];
       
    //      $insert = mysqli_query($conn,"INSERT INTO users
    //      (username, staffno, depname) 
    //      VALUES ('$uname', '$staff_no', '$depname')");
 
    //      if(!$insert)
    //      {
    //          echo mysqli_error($conn);
    //          //header("Location: ../adminView/viewAddUser.php");
    //          exit();
    //      }
    //      else
    //      {
    //          echo "User added successfully.";
    //          //header("Location: ../adminView/viewAddUser.php");
    //          exit();
    //      }
     
    // }
    $uname = $_POST['uname'];
    $depname = $_POST['depname'];
    $staff_no = $_POST['staffno'];
   
     $insert = mysqli_query($conn,"INSERT INTO users
     (username, staffno, depname) 
     VALUES ('$uname', '$staff_no', '$depname')");

     if(!$insert)
     {
         echo mysqli_error($conn);
         //header("Location: ../adminView/viewAddUser.php");
         exit();
     }
     else
     {
         echo "User added successfully.";
         //header("Location: ../adminView/viewAddUser.php");
         exit();
     }
     
?>