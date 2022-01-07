<?php 
include 'connection.php';
$user = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$query = "select * from user where user_name = '$user'";
// echo $query;

$result = mysqli_query($connection, $query);

// echo $result;
if($row = mysqli_fetch_assoc($result)){
	if ($) {
		// code...
	}
	$_SESSION['user'] = $user;
	header ('location:../php/index.php');
}
else{
	$_SESSION['error']= 'User not recognised';
	header ('location: .php');

}

?>