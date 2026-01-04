<?php 
session_start();
if (empty($_SESSION['username'])) {
  header("location:login_user.php?message=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
	<title>DAFTAR FALKES</title>
	<style>
		.container1{
			
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img style="width: 10%;" src="images/bpjs.jpg"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: -450px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="tentang.php">Tentang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="daftar.php">Daftar</a></li>
            <li><a class="dropdown-item" href="falkes.php">Fasilitas & Golongan</a></li>
            <li><a class="dropdown-item" href="kontak.php">Kontak</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-danger"><a href="logout.php" style="color: white; text-decoration: none">Logout</a></button>
      </form>
    </div>
  </div>
</nav>

<!-- class golongan -->
<div style="padding: 100px;">
<div align="center">
<div class="col-7" class="">
	<table class="table table-hover">
		<tr align="center">
			<td style="font-weight: bold">No</td>
			<td style="font-weight: bold" align="left">Golongan BPJS</td>
			<td style="font-weight: bold">Aksi</td>
		</tr>
		<?php 
		include('koneksi.php');

		$sql = "SELECT * FROM golongan";
		$query = mysqli_query($connect, $sql);
		$no = 1;

		while ($data = mysqli_fetch_array($query)) {
			?>
			<tr>
				<td align="center" style="font-weight: bold">
					<?= $no;
					$no++;?>
				</td>
				<td><?= $data['nama_golongan'];?></td>
				<td align="center"><a href="golongan_hapus.php?id_golongan=<?php echo $data['id_golongan'];?>" class="btn btn-outline-danger">Hapus</a></td>
			</tr>
		<?php } ?>	
	</table>
</div><br>
<div class="col-7" align="left">
	<form method="post" action="golongan_proses.php">
		<p>Masukkan Golongan yang diinginkan</p>
		<input type="radio" name="nama_golongan" value="Kelas 1" required style="width: 10%"><label>Kelas 1</label>
		<input type="radio" name="nama_golongan" value="Kelas 2" required style="width: 10%"><label>Kelas 2</label>
		<input type="radio" name="nama_golongan" value="Kelas 3" required style="width: 10%"><label>Kelas 3</label><br><br>
		<input type="submit" class="btn btn-primary" style="width: 100%">
	</form>
</div>
<br>
<!-- class deskrpsi golongan -->
<div class="col-7" style="text-align: justify;">
<div class="">
			<p style="font-weight: bold">Golongan BPJS Kelas 1</p>
		
			<p>	
				<ul>
					<li> Iuran Rp150.000/bulan</li>
					<li> Kamar inap dengan fasilitas paling sedikit, yaitu 2-4 orang </li>
				</ul>
			</p>

			<p style="font-weight: bold">Golongan BPJS Kelas 2</p>
			<p>	
				<ul>
					<li> Iuran Rp100.000/bulan</li>
					<li> Kamar inap dengan fasilitas lebih sedikit, yaitu 3-5 orang</li>
				</ul>
			</p>

			<p style="font-weight: bold">Golongan BPJS Kelas 3</p>
			<p>	
				<ul>
					<li> Iuran Rp35.000/bulan</li>
					<li> Konsultasi dokter </li>
					<li> Pemeriksaan penunjang, seperti laboratorium, radiologi (rontgen)</li>
                    <li> Obat Formularium Nasional (Fornas) maupun obat bukan Fornas
                    </li>
					<li>Akomodasi atau kamar perawatan</li>
				</ul>
			</p>
	</div>
</div>
		<br>
		<hr style="color: black; opacity:10">
<br>

<!-- class jenis layanan -->
<div align="center"style="padding: 100px; margin-top: -30px">
<div class="">
<div class="col-8" style="">
	<table class="table table-hover">
		<tr align="center">
			<td style="font-weight: bold">No</td>
			<td style="font-weight: bold" align="left">Layanan BPJS Kesehatan</td>
			<td style="font-weight: bold">Aksi</td>
		</tr>
		<?php 
		$sql = "SELECT * FROM falkes";
		$query = mysqli_query($connect, $sql);
		$no = 1;

		while ($data = mysqli_fetch_array($query)) {
			?>
			<tr>
				<td align="center" style="font-weight: bold">
					<?= $no;
					$no++;?>
				</td>
				<td><?= $data['nama_falkes'];?></td>
				<td align="center"><a href="falkes_hapus.php?id_falkes=<?php echo $data['id_falkes'];?>" class="btn btn-outline-danger">Hapus</a></td>
			</tr>
		<?php } ?>	
	</table>
</div><br>
<div class="col-8" align="left">
	<form method="post" action="falkes_proses.php">
		<p>Masukkan Layanan Kesehatan yang diinginkan</p>
		<input type="radio" name="nama_falkes" value="Tingkat 1" required style="width: 10%"><label>Tingkat 1</label>
		<input type="radio" name="nama_falkes" value="Tingkat Lanjutan" required style="width: 10%"><label>Lanjutan</label>
		<input type="radio" name="nama_falkes" value="Persalinan" required style="width: 10%"><label>Persalinan</label>
		<input type="radio" name="nama_falkes" value="Ambulans" required style="width: 10%"><label>Ambulans</label><br><br>
		<input type="submit" class="btn btn-primary" style="width: 100%">
	</form>
</div>
</div>
<br>
<!-- class deskrpsi layanan -->
<div class="col-8" style="text-align: justify;">
<div class="">
			<p style="font-weight: bold">Pelayanan kesehatan tingkat pertama</p>
		
			<p>	
				<ul>
					<li> biaya administrasi pelayanan kesehatan</li>
					<li> pemeriksaan, pengobatan, dan konsultasi medis, </li>
					<li> transfusi darah sesuai dengan kebutuhan medis,</li>
				</ul>
			</p>

			<p style="font-weight: bold">Pelayanan kesehatan rujukan tingkat lanjutan</p>
			<p>	
				<ul>
					<li> Perawatan inap di ruang intensif seperti ICU.</li>
					<li> Akupunktur medis.</li>
				</ul>
			</p>

			<p style="font-weight: bold"> Persalinan </p>
			<p>	
				<ul>
					<li> Persalinan yang ditanggung BPJS Kesehatan di fasilitas kesehatan tingkat pertama maupun tingkat lanjutan adalah persalinan sampai dengan anak ketiga</li>
				</ul>
			</p>

			<p style="font-weight: bold"> Ambulans </p>
			<p>	
				<ul>
					<li> Fasilitas ambulans menjadi tanggungan BPJS Kesehatan yang bertujuan menyelamatkan nyawa pasien.</li>
				</ul>
			</p>
	</div>
</div>
</div>


</body>
<footer align="center" style="background-color:#106cfc; color: whitesmoke; font-style: arial; padding: 15px; position: fixed; left: 0; bottom: 0; width: 100%;">
    &copy;2022 Copyright: <a href="https://bpjs-kesehatan.go.id/bpjs/" style="color: lightgray;">BPJS Kesehatan</a>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>