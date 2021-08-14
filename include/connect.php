<?php
$server = "13.212.100.240";
$user = "your_username";
$pass = "your-password";
$database = "php";
$connect = mysqli_connect($server,$user,$pass,$database); 
if (!$connect) {
	die("Connect Failed:".mysqli_connect_error());
	# code...
}
?>