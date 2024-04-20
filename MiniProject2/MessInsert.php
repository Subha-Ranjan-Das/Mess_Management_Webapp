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
$pass = $_POST['pass'];
$username = $_POST['username'];
$phone = (int)$_POST['phone'];
$course = $_POST['course'];
$email = $_POST['email'];


$userid = mysqli_real_escape_string($db, $userid);  
$pass = mysqli_real_escape_string($db, $pass); 
$username = mysqli_real_escape_string($db, $username);  
$phone = mysqli_real_escape_string($db, $phone); 
$course = mysqli_real_escape_string($db, $course);  
$email = mysqli_real_escape_string($db, $email); 

// Create connection
/*
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/

$sql = "INSERT INTO register (userid,pass,username,phone,course,email)
VALUES ('$userid','$pass','$username','$phone','$course','$email')";
if(!empty($pass)){
  if ($db->query($sql) === TRUE) {
  header('Location: SuccessRegister.php');
  }} else {
    echo '<script type ="text/JavaScript">';  
      echo 'if(confirm("wait!! empty field detected !!! please fill ")){';
     echo 'window.location.href = "ordering.html"';
     echo '}';
     // echo 'alert("you have already paid!! ")';  
      echo '</script>'; 
  }
// }else{
//   echo '<script type ="text/JavaScript">';  
//   echo 'if(confirm("wait!! empty field detected !!! please fill ")){';
//  echo 'window.location.href = "ordering.html"';
//  echo '}';
//  // echo 'alert("you have already paid!! ")';  
//   echo '</script>'; 

//  }



?>