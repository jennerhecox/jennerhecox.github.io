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
    
  <div class="jumbotron-fluid">
    <img class="img-fluid rounded" style="height: 40%; width: 100%;" src="img/jumbo.jpg" alt="">     
  </div>
      
      

    <div class="row" style="padding-top: 40px;">
      <div class="col-lg-6">
        <div class="card h-100 green123">
      <div class="card-header text-center">
        Guess this quote!
      </div>
      <div class="card-body text-center">"
         <?php
    
          $SQL = mysqli_query($db_con, "select * from Quotes;");
          $results = mysqli_query($db_con, "select * from Quotes where IDQuote = 1;");
          while($data = mysqli_fetch_array($results)) {

            echo '' . $data['Quote'];
          }
          ?>
      "</div>
      <div class="card-footer">
        <button type="button" class="btn buttonchange b-color">Shaggy</button>
        <button onclick="QuoteMath(1)" type="button" class="btn b-color b-colortrue">Velma</button>
        <button type="button" class="btn buttonchange b-color">Fred</button>
        <button type="button" class="btn buttonchange b-color">Scooby</button>
        <button type="button" class="btn buttonchange b-color">Daphne</button>
         </div>
         </div>
        </div>
      
     <div class="col-lg-6">
        <div class="card h-100 green123">
      <div class="card-header text-center">
        Guess this quote!
      </div>
      <div class="card-body text-center">"
         <?php
    
          $SQL = mysqli_query($db_con, "select * from Quotes;");
          $results = mysqli_query($db_con, "select * from Quotes where IDQuote = 2;");
          while($data = mysqli_fetch_array($results)) {

            echo '' . $data['Quote'];
          }
          ?>
      "</div>
      <div class="card-footer">
        <button onclick="QuoteMath(2)" type="button" class="btn b-colortrue b-color ">Shaggy</button>
        <button type="button" class="btn buttonchange b-color">Velma</button>
        <button type="button" class="btn buttonchange b-color">Fred</button>
        <button type="button" class="btn buttonchange b-color ">Scooby</button>
        <button type="button" class="btn buttonchange b-color">Daphne</button>
         </div>
         </div>
        </div>
        
        <div class="col-lg-6" style="padding-top: 40px;">
        <div class="card h-100 green123">
      <div class="card-header text-center">
        Guess this quote!
      </div>
      <div class="card-body text-center">"
         <?php
    
          $SQL = mysqli_query($db_con, "select * from Quotes;");
          $results = mysqli_query($db_con, "select * from Quotes where IDQuote = 3;");
          while($data = mysqli_fetch_array($results)) {

            echo '' . $data['Quote'];
          }
          ?>
      "</div>
      <div class="card-footer">
        <button type="button" class="btn buttonchange b-color">Shaggy</button>
        <button type="button" class="btn buttonchange b-color">Velma</button>
        <button type="button" class="btn buttonchange b-color ">Fred</button>
        <button onclick="QuoteMath(3)" type="button" class="btn buttonchange b-color b-colortrue">Scooby</button>
        <button type="button" class="btn buttonchange b-color">Daphne</button>
         </div>
         </div>
        </div>
        
        <div class="col-lg-6" style="padding-top: 40px;">
        <div class="card h-100 green123">
      <div class="card-header text-center">
        Guess this quote!
      </div>
      <div class="card-body text-center">"
         <?php
    
          $SQL = mysqli_query($db_con, "select * from Quotes;");
          $results = mysqli_query($db_con, "select * from Quotes where IDQuote = 4;");
          while($data = mysqli_fetch_array($results)) {

            echo '' . $data['Quote'];
          }
          ?>
      "</div>
      <div class="card-footer">
        <button type="button" class="btn buttonchange b-color ">Shaggy</button>
        <button type="button" class="btn buttonchange b-color ">Velma</button>
        <button onclick="QuoteMath(4)" type="button" class="btn buttonchange b-color b-colortrue">Fred</button>
        <button type="button" class="btn buttonchange b-color ">Scooby</button>
        <button type="button" class="btn buttonchange b-color ">Daphne</button>
         </div>
         </div>
        </div>
        
         <div class="col-lg-6" style="padding-top: 40px;">
        <div class="card h-100 green123">
      <div class="card-header text-center">
        Guess this quote!
      </div>
      <div class="card-body text-center">"
         <?php
    
          $SQL = mysqli_query($db_con, "select * from Quotes;");
          $results = mysqli_query($db_con, "select * from Quotes where IDQuote = 5;");
          while($data = mysqli_fetch_array($results)) {

            echo '' . $data['Quote'];
          }
          ?>
      "</div>
      <div class="card-footer">
        <button type="button" class="btn buttonchange b-color">Shaggy</button>
        <button type="button" class="btn buttonchange b-color ">Velma</button>
        <button type="button" class="btn buttonchange b-color ">Fred</button>
        <button type="button" class="btn buttonchange b-color">Scooby</button>
        <button onclick="QuoteMath(5)"  type="button" class="btn buttonchange b-color b-colortrue">Daphne</button>
         </div>
         </div>
        </div>
        
         <div class="col-lg-6" style="padding-top: 40px;">
        <div class="card h-100 green123">
      <div class="card-header text-center">
        Provide quote suggestions here:
      </div>
      <div class="card-body text-center">
         <form>
        <div class="form-group">
          <input class="form-control input-lg" id="suggestions" type="text">
        </div>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-primary ">Submit</button
         </div>
         </div>
        </div>
       
    </div>

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
