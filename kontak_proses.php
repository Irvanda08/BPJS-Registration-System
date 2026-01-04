<?php 
include 'koneksi.php';

$namakontak = $_POST['namakontak'];
$keluhan = $_POST['keluhan'];


$sql	= "INSERT INTO kontak (`namakontak`, `keluhan`) VALUES('$namakontak', '$keluhan')";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location:index.php");
	} else {
		echo "Input Data Gagal.";
	}

 ?>