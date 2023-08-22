<?php
   session_start();
   include_once "./config/dbconnect.php";

?>

<link rel="stylesheet" href="./assets/css/style.css"></link>

 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">
    <div class="image" style="background-color: #3B3131;">
        <img  src="./assets/images/kenha.png" width="950px" height="80" alt="kenha logo">
    </div> 
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
        <a href="logout.php" class="btn btn-primary float-end">Logout</a>
     
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <i  style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <a href="" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
    </div>  
</nav>
