<?php 

$hostname	= "localhost"; 
$username	= "root"; 
$password	= ""; 
$database	= "bpjs";

$connect	= new mysqli($hostname, $username, $password, $database, 4306);

	if($connect->connect_error) { //cek error
		die("Error : ".$connect->connect_error);
	}

function registrasi($data){
	global $connect;

	$username = mysqli_real_escape_string($connect, $data["username"]);
	$password = strtolower(stripslashes($data["password"]));

	mysqli_query($connect, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($connect);
}

 ?>