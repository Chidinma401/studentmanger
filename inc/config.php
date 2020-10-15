<?php
// conection string
$host = "localhost";
$user = "root";
$pass ="";
$database ="studentmanager";
$db = mysqli_connect($host, $user, $pass, $database);

if (!$db) {
	die("connection failed");
}
	

?>