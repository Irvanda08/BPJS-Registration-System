<?php 
	include 'koneksi.php';
	$id	= $_GET['id_falkes'];

	$query = mysqli_query($connect, "DELETE FROM falkes where id_falkes=$id");

	if($query)
	{
		header("location:falkes.php");
	}
	else{
		echo "proses hapus gagal";
	}
?>