
<!DOCTYPE html>
<html>

<head>
  <title>Login and Register Page</title>
  <!-- Add the Bootstrap CSS link here -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>

    /* Custom CSS to center the content on the page */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .auth-container {
      max-width: 400px;
    }
  </style>

  <script type="text/javascript">

      function preventBack(){window.history.forward()};
      setTimeout("preventBack()", 0);
      window.onunload = function(){null;}
  </script>
</head>

<body>
  <div class="auth-container">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab"
          aria-controls="pills-login" aria-selected="true">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-register-tab" data-toggle="pill" href="#pills-register" role="tab"
          aria-controls="pills-register" aria-selected="false">Register</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
      <div id="error-message" style="display: none; color: red;">Username or password is incorrect</div>
        <!-- Login Form -->
        <form id="login-form" action="regesterUser.php" method="post">
          <div class="form-group">
            <label for="loginUsername">Username</label>
            <input type="text" class="form-control" id="loginUsername" name="username" placeholder="Enter your username" required>
          </div>
          <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password" required>
          </div>
          <button type="submit" id="login-button" class="btn btn-primary" name="upload">Login</button>
        </form>
      </div>
      <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
        <!-- Register Form -->
        <form action="regesterUser.php" method="post">
        <div id="username-error" style="display: none; color: red;">Username already exists</div>
          <div class="form-group">
            <label for="registerUsername">Username</label>
            <input type="text" class="form-control" id="registerUsername" name="username" placeholder="Choose a username" required>
          </div>
          <div class="form-group">
            <label for="registerPassword">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Choose a password" required>
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirm_password" placeholder="Confirm your password" required>
          </div>
          <span id="password-match-message" style="display: none; color: red;">Passwords do not match</span>
          <button type="submit" id="register-button" class="btn btn-primary" name="reg">Register</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Add the Bootstrap JS and jQuery links here (required for Bootstrap functionality) -->
  <script type="text/javascript" src="./assets/js/ajaxWork.js"></script> 
  <script type="text/javascript" src="./assets/js/slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>   
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<script>
    $(document).ready(function () {
        $("#confirmPassword").keyup(function () {
            var password = $("#password").val();
            var confirmPassword = $(this).val();

            if (password === confirmPassword) {
                $("#password-match-message").hide();
                $("#register-button").prop("disabled", false);
            } else {
                $("#password-match-message").show();
                $("#register-button").prop("disabled", true);
            }
        });

        $("#register-button").click(function () {
            // Perform your registration AJAX request here
            // ...
        });
    });


</script>

</html>
