<?php 

// $conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = mysqli_connect('localhost', 'root', '', 'hangmans');
mysqli_query($conn, "SET CHARACTER SET 'utf8'");

// if (!$conn) {
// 	die("Connection failed: " . mysqli_connect_error());
// } else {
// 	echo "Connected successfully !";
// }