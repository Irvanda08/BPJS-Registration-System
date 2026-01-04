<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$tanggal_lahir= $_POST['tanggal_lahir'];
$alamat= $_POST['alamat'];
$telepon= $_POST['telepon'];
$nama_golongan= $_POST['nama_golongan'];
$nama_falkes= $_POST['nama_falkes'];

$sql	= "INSERT INTO data (`nama`, `tanggal_lahir`, `alamat`, `telepon`, `id_golongan`, `id_falkes`) VALUES('$nama', '$tanggal_lahir', '$alamat', '$telepon', '$nama_golongan', '$nama_falkes')";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location:tampil.php");
	} else {
		echo "Input Data Gagal.";
	}

 ?>