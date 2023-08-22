<?php



    include_once "./config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $username = $_POST['username'];
        $password = $_POST['password'];
       
    
        $query = "SELECT password FROM user_login WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Fetch the row from the result as an associative array
            $row = mysqli_fetch_assoc($result);
        
            if ($row) {
                // The user exists, and we have fetched the stored hashed password
                $storedPassword = $row['password'];
        
                // Now you can use $storedHashedPassword to compare it with the entered password during login
            } else {
                // No user found with the provided username
                echo "User not found.";
            }
        } else {
            // Query execution failed
            echo "Query error: " . mysqli_error($conn);
        }
        
        if ($password === $storedPassword) {
            // Passwords match, user is authenticated. Perform the login action and redirect.
            // For example, you can set a session variable to indicate the user is logged in, then redirect to the dashboard.
            session_start();
            $_SESSION['user_id'] = $username; // Store the user's ID in the session for future use
            header("Location: ./home.php");
            echo "success";
            exit();
        } else {
            // Passwords do not match. Handle the login failure (e.g., show an error message).
            echo "failure";
            header("Location: ./index.php");
        }

    }

    if(isset($_POST['reg']))
    {
       
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
       
        $query = "SELECT username FROM user_login WHERE username = '$username'";
        $stmt = $conn-> query($query);

        if($stmt-> num_rows > 0)
        {
            echo "exists";
            header("Location: ./index.php");
            exit();

        }
        else
        {
        
            if ($password === $confirm_password) {
                // Passwords match, user is authenticated. Perform the login action and redirect.
                // For example, you can set a session variable to indicate the user is logged in, then redirect to the dashboard.
                $sql = mysqli_query($conn, "INSERT INTO user_login VALUES('$username', '$password')");
                if($sql)
                {
                    header("Location: ./index.php");
                    exit();
                }
            
            } else {
                // Passwords do not match. Handle the login failure (e.g., show an error message).
                echo "Password Mismatch";
                header("Location: ./index.php");

            }
        }

    }
        
?>