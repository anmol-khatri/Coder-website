<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'coder';
$connection = mysqli_connect($hostname, $username, $password, $databasename);
?>