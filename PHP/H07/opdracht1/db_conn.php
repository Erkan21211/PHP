<?php

$hostname = "localhost";
$user = "id18589099_root";
$pass = "D3|4PM1q=4Ave^49";
$dbname = "id18589099_phpschool";

$conn = mysqli_connect($hostname,$user,$pass,$dbname);
if (!$conn) {
	echo "Connection failed!";
}


?>