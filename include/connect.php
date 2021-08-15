<meta charset="utf-8">
<?php
$server = "13.212.100.240";
$user = "minh";
$pass = "minh";
$database = "minhpro"; //đẩy lại lên xem
$connect = mysqli_connect($server,$user,$pass,$database); 
if (!$connect) {
	die("Connect Failed:".mysqli_connect_error());
	# code...
}
?>