<?php 
	include 'koneksi.php';

	$nama_golongan 	= $_POST['nama_golongan'];

	$sql	= "INSERT INTO golongan (`nama_golongan`)VALUES('$nama_golongan')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query){
		header("location: falkes.php?message=berhasil");
	}else{
		echo "input data gagal";
	}
 ?>