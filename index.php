<!DOCTYPE html>

<?php
// Include config file
require_once "conn.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($db_con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($db_con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($db_con);
}
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Img/Gang.jpg">
    <title>ScoobyDoo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
      <script src="js/scripts.js"></script>
    <link href="css/small-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">

  </head>

  <body style="background-color:#128A84;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#4b0055;">
      <div class="container">
        <a class="navbar-brand font" href="index.php">Home</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            </li>
            <li class="nav-item">
              <a class="nav-link font" href="Characters.php">Characters</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font" href="Tables.php">Quotes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font" href="Contact.php">Contact</a>
            </li>
              <?php
              // Initialize the session
              session_start();
               
              // Check if the user is logged in, if not then redirect him to login page
              if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
              {
                 echo "<p style='color:white;'>Sign in to access full site</p>";
              }
              else {
                echo "<p style='color:white;'>Welcome User&nbsp&nbsp</p><a href='logout.php'>LogOut</a>";
              }
              ?>
            </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container" style="margin-top: 40px;">

      <!-- Heading Row -->
      <div class="row">
        <div class="col-lg-8">
          <img class="img-fluid rounded" src="img/ScoobyDoo900x400.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-body">
              <!-- <h2 class="card-title">Username/Password</h2>
              <p class="card-text">Username: <br></br> Password:</p> -->


        <h2>Sign Up</h2>
        <!--<p>Please fill this form to create an account.</p>-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
                 <a href="login.php">Login here</a>
            </div>
            <!--<p>Already have an account? <a href="login.php">Login here</a>.</p>-->
        </form>
            </div>
          </div>
        </div>
        
        <div class="col-lg-8" style="margin-top: -60px;">
          <div class="card h-100 green123">
            <div class="card-header">
              <button type="button" name="button" onclick="randomTrivia()" class="btn btn-primary">Trivia Generator</button>
            </div>
            <div class="card-body">
              <p class="card-text trivia" id="results"></p>
            </div>
          </div>
        </div>

        <!-- /.col-md-4 -->
      </div>
    
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5" style="background-color:#4b0055;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; RVC PHP 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
