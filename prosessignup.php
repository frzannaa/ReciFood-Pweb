<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "rahel_urecipe", "123456oK", "rahel_recipe");

if($conn->connect_error) {
  exit('Could not connect');
}

$username=$_GET['username'];
$nama=$_GET['nama'];
$email=$_GET['email'];
$password=$_GET['password1'];

if ($_GET['password1'] !=  $_GET['password2']) 
{
  echo header('location: password_didnt_match.php');
  
  return;
}


$sql = "INSERT INTO user (username, nama, email, password) VALUES ('$username','$nama','$email','$password')";

//echo "<br>";
//echo $sql;
//echo "<br>";

$result = mysqli_query($conn, $sql);

if ($result != null) {
	//echo "Data Tersimpan. Silakan <a href='login.php'> Login. </a> " ;
   header('location: loginagain.php');
}  
  else
 {
  echo header('location: password_didnt_match.php');
    
}





?>
