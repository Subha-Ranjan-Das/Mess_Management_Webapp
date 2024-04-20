<?php

$name = $_POST['name'];
$roll = $_POST['roll'];
//$age = (int)$_POST["age"];
$course = $_POST['course'];
$year =	$_POST['year'];
$phone = (int)$_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];





if(!empty($name && $roll&& $course && $year && $phone && $email && $gender)){
	if(strlen($phone)>9 && strlen($phone)<14){
		if(strlen($diff)!=0){
			echo '<script type="text/Javascript">';
			echo 'alert("Year must not be inputted zero")';
			echo '</script>';
		}
	}
	else{
		echo '<script type = "text/Javascript">';
		echo 'alert("please enter valid number")';
		echo '</script>';
	}
}else{
	echo '<script type = "text/Javascript">';
	echo 'alert("please enter all fields")';
	echo '</script>';
}

/*
echo $name;
echo "<br>";
echo $lastname;
echo "<br>";
echo $course;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $bloodgroup;
echo "<br>";
echo $state;
echo "<br>";

*/

?>