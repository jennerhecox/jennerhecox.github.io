<?php
$host="127.0.0.1" ; // Host name
$username="JHecox"; // Mysql username
$password="SQLPassword"; // Mysql password
$db_name="JHecox"; // Database name
//mysqli_connect
$db_con=mysqli_connect($host,$username,$password, $db_name);
// Connect to server and select database.
mysqli_connect($host, $username, $password)or die("cannot connect server ");
// mysqli_select
mysqli_select_db($db_con,$db_name)or die("cannot select DB");
?>
