<?php 
	include 'koneksi.php';

	$nama_falkes 	= $_POST['nama_falkes'];

	$sql	= "INSERT INTO falkes (`nama_falkes`) VALUES('$nama_falkes')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query){
		header("location: falkes.php?message=berhasil");
	}else{
		echo "input data gagal";
	}
 ?>