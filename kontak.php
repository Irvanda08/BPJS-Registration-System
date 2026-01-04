
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KONTAK</title>
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
      body{
        background-color: white;
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
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="tentang.php">Tentang</a>
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
  <section class="h-100 gradient-form" style="margin-top: 30px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="images/bpjs.jpg" style="width: 40%">
                </div>

                <form action="kontak_proses.php" method="post">
                  <p align="center" style="font-weight: bold;">Sampaikan Keluhan Anda</p>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Nama</label>
                    <input type="text" name="namakontak" id="form2Example11" class="form-control"
                      placeholder="Masukkan nama" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label">Masukkan keluhan anda</label>
                    <textarea class="form-control" name="keluhan" required placeholder="keluhan anda"></textarea>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button style="width: 70%;" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Kirim</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-black px-3 py-4 p-md-5 mx-md-4" style="margin-top:-10px;">
                <p class="medium mb-0" align="center">
                  <img src="images/kantor.jpg" style="width:70%; border-radius:8px;">
                </p>
                <br>
                <p class="medium mb-0">
                  <img src="images/map.png" style="width: 10%">
                  Kantor Pusat JL Letjen Suprapto Cempaka Putih
                </p>
                <br>
                <p class="medium mb-0" style="margin-left: 7px;">
                  <img src="images/telepon.png" style="width: 8%">
                  <a style="margin-left:5px;">021-4212938</a>
                </p>
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