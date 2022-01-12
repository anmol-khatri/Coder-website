<?php 	
	include "../includes/connection.php";
	$id = $_GET['id']; 
	$name = $_GET['name'];
	$sql = "delete from usercourse where course_id = '$id' and user_name = '$name'";
	mysqli_query($connection,$sql);
	

	// check to see if any rows were affected
	if (mysqli_affected_rows($connection) > 0) {
	 //If yes , return to calling page(stored in the server variables)
		
	 header("Location: {$_SERVER['HTTP_REFERER']}");
	} else {
	 // print error message
	 echo "Error in query: $query. " . mysqli_error($connection);
	 exit ;
	}

?>