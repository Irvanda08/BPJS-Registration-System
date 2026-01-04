<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal_lahir= $_POST['tanggal_lahir'];
$alamat= $_POST['alamat'];
$telepon= $_POST['telepon'];
$nama_golongan= $_POST['nama_golongan'];
$nama_falkes= $_POST['nama_falkes'];

$sql	= "UPDATE data SET nama='$nama', tanggal_lahir='$tanggal_lahir', alamat='$alamat', telepon='$telepon', id_golongan='$nama_golongan', id_falkes='$nama_falkes' WHERE id_data = '$id'";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
	header("location:tampilbiodata.php");
} else {
	echo "Input Data Gagal.";
}