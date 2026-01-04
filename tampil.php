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
	<title>RESPONS INPUT DATA</title>
	<style>
		.isi {

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
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
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

<div class="isi" align="center">
	<h1 style="margin-top: 180px; font-style: arial;"> Terima kasih,telah mendaftar di Laman BPJS </h1>
	<br>
	<br>
	<hr style="width: 200px;">
	<br>
	<br>
	<h3 style="font-style: arial;"> Jika Anda ingin melihat atau mengubah data anda,</h3>
  <h3 style="font-style: arial;"> silahkan menghubungi bagian admin</h3>
	<br>
	<button style="border-color: red; border: 3px; border-radius: 5px; background-color: white;">
	<a style="font-style: arial; text-decoration: none; color: red;" href="logout.php"> Klik disini </a>
	</button>
</div>
</body>
<footer align="center" style="background-color:#106cfc; color: whitesmoke; font-style: arial; padding: 15px; position: fixed; left: 0; bottom: 0; width: 100%;">
    &copy;2022 Copyright: <a href="https://bpjs-kesehatan.go.id/bpjs/" style="color: lightgray;">BPJS Kesehatan</a>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>