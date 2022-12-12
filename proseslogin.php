<?php
// Start the session
session_start();

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "rahel_urecipe", "123456oK", "rahel_recipe");

if($conn->connect_error) {
  exit('Could not connect');
}



$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * from user where email = '" . $email . "' AND password='" . $password . "'";

//echo "<br>";
//echo $sql;

$result = mysqli_query($conn, $sql);


if ($row=mysqli_fetch_object($result))
  
{

  echo "Login berhasil...";
  // Set session variables
$_SESSION["id_user"] = $row->id_user;
$_SESSION["nama"] = $row->nama;
$_SESSION["email"] = $row->email;
  
  header('location: index.php');
}
else
{
     echo header('location: password_didnt_match.php');
}  



?>
