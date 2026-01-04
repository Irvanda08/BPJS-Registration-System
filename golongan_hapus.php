<?php 
	include 'koneksi.php';
	$id_golongan	= $_GET['id_golongan'];

	$query = mysqli_query($connect, "DELETE FROM golongan where id_golongan=$id_golongan");

	if($query)
	{
		header("location:falkes.php");
	}
	else{
		echo "proses hapus gagal";
	}
?>