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
    <title>BIODATA PESERTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
    rel="stylesheet"
    />
    <link href="https://fontawesome.com/docs/web/setup/get-started">  
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
        .alert-1{
            background: #0fb9b1;
        }
        .alert-1 span{
            background: #2bcbba;
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
          <a class="nav-link active" aria-current="page" href="tampilbiodata.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="keluhan.php">Feedback</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-danger"><a href="logout_admin.php" style="color: white; text-decoration: none">Logout</a></button>
      </form>
    </div>
  </div>
</nav>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <center>
                    <div class="alert-1" style="width: 25%; border-radius: 30px; padding-bottom: 0.5px; padding-top:10px">
                        <span><i></i></span>
                    <p style="color: white; font-weight: bold"><?php echo "Halo, $_SESSION[username_admin]"; ?></p>
                </center>
        </div>
                <h1 align="left" style="font-weight: bold">Data BPJS</h1>
                <hr style="opacity: 1;"><br>
                <table class="table table-hover" style="background-color: blanchedalmond; border: grey;">
                    <tr style="font-weight: bold">
                        <td>No</td>
                        <td>Nama</td>
                        <td>Tanggal lahir</td>
                        <td>Alamat</td>
                        <td>Telepon</td>
                        <td>Kelas Golongan</td>
                        <td>Layanan Falkes</td>
                        <td colspan="3">Aksi</td>
                    </tr>
                    <?php
                    include('koneksi.php');

                    $sql    = "SELECT * FROM data INNER JOIN golongan ON data.id_golongan = golongan.id_golongan
                    INNER JOIN falkes ON data.id_falkes = falkes.id_falkes";
                    $query    = mysqli_query($connect, $sql);
                    $no = 1;

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td style="font-weight: bold">
                                <?= $no;
                                $no++ ?>
                            </td>
                            <td align="left"><?= $data['nama']; ?></td>
                            <td align="left"><?= $data['tanggal_lahir']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['telepon']; ?></td>
                            <td><?= $data['nama_golongan']; ?></td>
                            <td><?= $data['nama_falkes']; ?></td>
                            <td><a class="btn btn-outline-primary" href=daftar_edit.php?id_data=<?php echo $data['id_data']; ?>>Ubah</a></td>
                            <td><a class="btn btn-outline-danger" href=hapus.php?id_data=<?php echo 
                            $data['id_data'];?>>Hapus</a></td>
                            <td><a class="btn btn-outline-info" href=lihat.php?id_data=<?php echo $data['id_data'];?>>Lihat</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
