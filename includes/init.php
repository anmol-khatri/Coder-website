<?php 
session_start();
//Set up the database access credentials
$hostname = 'localhost'; 
$username = 'root'; //your standard uni id
$password = ''; // the password found on the W: drive
$databaseName = 'wat2021db'; //the name of the db you are using on phpMyAdmin
if ($connection = mysqli_connect($hostname, $username, $password, $databaseName)) {
	// echo "connected successfully";
}
else {
	echo "not connected";
}
