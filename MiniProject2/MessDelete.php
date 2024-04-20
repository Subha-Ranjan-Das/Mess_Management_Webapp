<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafeteria";
*/
include("config.php");
// Take input from the HTML form

$userid = $_POST['userid'];
// $pass = $_POST['pass'];
// $username = $_POST['username'];
// $phone = (int)$_POST['phone'];
// $course = $_POST['course'];
// $email = $_POST['email'];


$userid = mysqli_real_escape_string($db, $userid);  
// $pass = mysqli_real_escape_string($db, $pass); 
// $username = mysqli_real_escape_string($db, $username);  
// $phone = mysqli_real_escape_string($db, $phone); 
// $course = mysqli_real_escape_string($db, $course);  
// $email = mysqli_real_escape_string($db, $email); 

// Create connection
/*
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/

$sql = "DELETE FROM register WHERE userid= '$userid'";

if ($db->query($sql) === TRUE) {
  header('Location: afterdeletion.php');
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}



?>