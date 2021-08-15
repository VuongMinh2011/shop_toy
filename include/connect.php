<?php
$server = "13.212.100.240";
$user = "your_username";
$pass = "your-password";
$database = "minhpro"; // thế để ntn // thế phải để nhu thế chỗ php à// để cái tên db tạo hôm qua ấy//thế chỗ database để minhpro là cái tên t để trong cái s
$connect = mysqli_connect($server,$user,$pass,$database); 
if (!$connect) {
	die("Connect Failed:".mysqli_connect_error());
	# code...
}
?>