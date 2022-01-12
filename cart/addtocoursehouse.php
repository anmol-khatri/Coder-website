<?php 
include "../includes/connection.php";
$courseid = $_GET['id'];
$user= $_GET['name'];
$addsql = "Insert into usercourse(user_name, course_id) values ('$user','$courseid')";
if($result= mysqli_query($connection,$addsql)){
	echo "added values successfully";
	echo "<a href='coursehouse.php'>View coursehouse</a>";

}
?>
