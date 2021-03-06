<?php
include_once 'conn.php';
?>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<?php  include("conn.php"); ?>
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
                 echo 'Sign in to access full site';
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
    <div class="container">
<div style="padding-top: 40px;">

</div>
    
    
   <form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
</table>
</form>

    

      </div>
      <!-- /.row -->

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
