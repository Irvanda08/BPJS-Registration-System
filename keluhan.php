<?php 
session_start();
if (empty($_SESSION['username_admin'])) {
  header("location:index_admin.php?message=belum_login");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KELUHAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
    rel="stylesheet"
    />  
    <style>
        body{
            background-color: blanchedalmond;
        }
        table{
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
        .off {
        color: grey;
        }
        .on {
            color: white;
        }
    </style>
</head>
<body>
    <!-- NAVBAR  -->
<nav class="navbar navbar-expand-lg" style="background-color: white">
  <div class="container-fluid">
    <a class="navbar-brand" href="tampilbiodata.php"><img style="width: 10%;" src="images/bpjs.jpg"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: -410px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="tampilbiodata.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="keluhan.php">Feedback</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-danger"><a href="logout_admin.php" style="color: white; text-decoration: none">Logout</a></button>
      </form>
    </div>
  </div>
</nav>

<div id="intro-example" class="">
            <div class="">
                <?php include 'koneksi.php'; ?>
                <div class="container-md 4" style="margin-top: 2cm;">
                    <form method="GET" action="">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="search" id="form1" class="form-control" name="cari" style="color:black;" />
                                <label class="form-label" for="form1" style="color:black;">Search</label>
                            </div>

                            <button type="submit" value="cari" class="btn btn-primary">
                                <i>Cari</i>
                            </button>

                        </div>
                    </form>
                </div>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1 align="left" style="font-weight: bold">Data Feedback</h1>
                <hr style="opacity: 1;"><br>
                <table class="table table-hover" style="background-color: blanchedalmond;border: grey; font-size: 12pt">
                    <tr style="font-weight: bold">
                        <td>No</td>
                        <td>Nama</td>
                        <td>Keluhan</td>
                    <?php
                    if (isset($_GET['cari'])) {
                        $cari = $_GET['cari'];
                        $data = mysqli_query($connect, "SELECT * FROM kontak WHERE namakontak LIKE '%" . $cari . "%'");
                    }else{
                        $data = mysqli_query($connect, "SELECT * FROM kontak");
                    }
                    $no = 1;

                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td style="font-weight: bold; padding-top: 20px; padding-bottom: 20px;">
                                <?= $no;
                                $no++ ?>
                            </td>
                            <td style="padding-top: 20px; padding-bottom: 20px;"><?= $d['namakontak']; ?></td>
                            <td style="padding-top: 20px; padding-bottom: 20px;"><?= $d['keluhan']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>
</html>