<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafeteria";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
//echo "Connected successfully";

//$sql = "INSERT INTO student (name, age) VALUES ('John', 6)";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
//$db->close();
?>