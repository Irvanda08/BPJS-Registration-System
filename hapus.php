<?php 
	include 'koneksi.php';
	$id_data = $_GET['id_data'];

	$query = mysqli_query($connect, "DELETE FROM data where id_data=$id_data");

	if ($query) {
		header("location:tampilbiodata.php");
	}
	else{
		echo "proses hapus gagal";
	}
 ?>