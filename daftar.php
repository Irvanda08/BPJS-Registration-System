<?php 
session_start();
if (empty($_SESSION['username'])) {
  header("location:login_user.php?message=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DAFTAR</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      .container1{
        padding: 100px;
        margin-left: 820px;
        margin-right: 50px;
        margin-top: -550px;
      }
      .container2{
        padding: 0px;
        margin-top: 40px;
      }
      p{
        line-height: 2;
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
        <section class="vh-100" style="margin-top:-100px;">
  <div class="container py-5 h-00" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-l-12">
        <div class="" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="images/nulis.png" style="border-radius: 1rem 0 0 1rem; margin-top: 150px; width: 120%; margin-left: -130px;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black"><br>
                <form method="POST" action="daftar_proses.php">

                  <div align="center" style="">
                    <span class="h1 fw-bold mb-0">Input Data Anda</span>
                  </div><br>

                  <div class="form-outline mb-4">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label">Tanggal lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="tgl/bulan/tahun" required />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat" required>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label">No. Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Masukkan no telepon" required>
                  </div>
                  <div class="form-outline mb-4">
                    <label>Pilih Layanan Kesehatan</label><br>
                        <select class="form-select" name="nama_falkes" style="background-color: white; color: black;";>
                            <?php
                                include('koneksi.php');
                                $sql    = "SELECT * FROM falkes";
                                $query    = mysqli_query($connect, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                echo '<option value="' . $data['id_falkes'] . '">' . $data['nama_falkes'] . '</option>';
                            }
                            ?>
                        </select><br>
                        <label>Pilih Golongan</label><br>
                        <select class="form-select" name="nama_golongan" style="background-color: white; color: black;">
                            <?php
                                $sql    = "SELECT * FROM golongan";
                                $query    = mysqli_query($connect, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                echo '<option value="' . $data['id_golongan'] . '">' . $data['nama_golongan'] . '</option>';
                            }
                            ?>
                        </select>
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="login btn btn-outline-primary text-center" type="submit" style="width:49%">Submit</button>
                    <button class="login btn btn-outline-primary text-center" type="reset" style="width:49%">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<footer align="center" style="background-color:#106cfc; color: whitesmoke; font-style: arial; padding: 15px; position: fixed; left: 0; bottom: 0; width: 100%;">
    &copy;2022 Copyright: <a href="https://bpjs-kesehatan.go.id/bpjs/" style="color: lightgray;">BPJS Kesehatan</a>
</footer>
</html>