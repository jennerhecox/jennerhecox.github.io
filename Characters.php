<!DOCTYPE html>

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
      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100 green123">
            <div class="card-body">
              <h4 class="card-title smallfont">ScoobyDoo</h4>
              <img src="img/scooby.png" alt="ScoobyDoo" height="250" width="250" class="tilt" onclick="myAudioFunction('hello');">
              <p class="card-text scoobyfont">
                
                 <?php
    
                  $SQL = mysqli_query($db_con, "select * from Bios;");
                  $results = mysqli_query($db_con, "select * from Bios where IDBio = 1;");
                  while($data = mysqli_fetch_array($results)) {
  
                    echo '' . $data['Description'];
                  }
                  ?>
                
              </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100 green123">
            <div class="card-body">
              <h4 class="card-title scoobyfont">Daphne</h4>
              <img src="img/Daphne.png" alt="Daphne" height="260" width="220" class="tilt2" onclick="myAudioFunction('Jeepers');">
              <p class="card-text scoobyfont">
                
                 <?php
    
                  $SQL = mysqli_query($db_con, "select * from Bios;");
                  $results = mysqli_query($db_con, "select * from Bios where IDBio = 2;");
                  while($data = mysqli_fetch_array($results)) {
  
                    echo '' . $data['Description'];
                  }
                  ?>
                 </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100 green123">
            <div class="card-body">
              <h4 class="card-title scoobyfont">Shaggy</h4>
              <img src="img/shaggy.png" alt="Shaggy" height="250" width="250" class="tilt" onclick="myAudioFunction('Zoinks');">
              <p class="card-text scoobyfont">
                
                 <?php
    
                  $SQL = mysqli_query($db_con, "select * from Bios;");
                  $results = mysqli_query($db_con, "select * from Bios where IDBio = 3;");
                  while($data = mysqli_fetch_array($results)) {
  
                    echo '' . $data['Description'];
                  }
                  ?>
                
              </div>
          </div>
        </div>


        <div class="col-md-4 mb-4">
          <div class="card h-100 green123">
            <div class="card-body">
              <h4 class="card-title scoobyfont">Velma</h4>
              <img src="img/velma.png" alt="Velma" height="250" width="230" class="tilt2" onclick="myAudioFunction('Clue');">
              <p class="card-text scoobyfont">
                
                 <?php
    
                  $SQL = mysqli_query($db_con, "select * from Bios;");
                  $results = mysqli_query($db_con, "select * from Bios where IDBio = 4;");
                  while($data = mysqli_fetch_array($results)) {
  
                    echo '' . $data['Description'];
                  }
                  ?>
                
              </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 green123">
            <div class="card-body">
              <h4 class="card-title scoobyfont">Fred</h4>
              <img src="img/fred.png" alt="Fred" height="250" width="190" class="tilt" onclick="myAudioFunction('Idea');">
              <p class="card-text scoobyfont">
                
                 <?php
    
                  $SQL = mysqli_query($db_con, "select * from Bios;");
                  $results = mysqli_query($db_con, "select * from Bios where IDBio = 5;");
                  while($data = mysqli_fetch_array($results)) {
  
                    echo '' . $data['Description'];
                  }
                  ?>
                
              </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 green123">
            <div class="card-body">
              <h4 class="card-title scoobyfont">Mr. Hyde</h4>
              <img src="img/hyde.png" alt="Creeper" height="250" width="230" class="tilt2" onclick="myAudioFunction('Banshee');">
              <p class="card-text scoobyfont">
                
                 <?php
    
                  $SQL = mysqli_query($db_con, "select * from Bios;");
                  $results = mysqli_query($db_con, "select * from Bios where IDBio = 6;");
                  while($data = mysqli_fetch_array($results)) {
  
                    echo '' . $data['Description'];
                  }
                  ?>
                
              </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

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
