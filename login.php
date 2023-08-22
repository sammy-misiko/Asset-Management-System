<?php
        include_once "./config/dbconnect.php";

        if(isset($_POST['username']))
        {
            $username = $_POST['username'];
       
    
            $query = "SELECT username FROM user_login WHERE username = '$username'";
            $stmt = $conn-> query($query);
    
            if($stmt-> num_rows > 0)
            {
                echo "exists";
            }else{
                echo "available";
            }

        }
?>