<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "messmanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT stu_id, stu_name, course FROM student";
$sql = "SELECT * FROM messentry";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "Student Database";
  echo "<br>";
  echo "<br>";
  echo "<table border><tr><th>Name</th> <th>RollNo.</th> <th>Course</th> <th>Year</th> <th>Phone</th> <th>Email</th> <th>Gender</th>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"] ."</td><td>" . $row["roll"]. "</td><td>" . $row["course"]."</td><td>" . $row["year"]. "</td><td>". $row["phone"]. "</td><td>" . $row["email"]. "</td><td>" . $row["gender"]."<br>";
	//echo "Student id: " . $row["stu_id"]. " - Student Name: " . $row["stu_name"]. " and course: " . $row["course"]. " phone: " . $row["phone_no"]. " state: " . $row["state"]. "<br>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>