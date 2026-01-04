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
    <title>EDIT DATA BPJS</title>
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
            padding: 100px;
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
          <a class="nav-link" aria-current="page" href="tampilbiodata.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link " aria-current="page" href="keluhan.php">Feedback</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-danger"><a href="logout_admin.php" style="color: white; text-decoration: none">Logout</a></button>
      </form>
    </div>
  </div>
</nav>

<!-- EDIT INPUT BIODATA -->
    <div class="container text-center" style="margin-top:-40px">
        <div class="row">
            <div class="col">
                <?php 
                include ('koneksi.php');
                $id = $_GET['id_data'];
                $query = mysqli_query($connect, "SELECT * from data where id_data=$id");
                $edit = mysqli_fetch_array($query);
                 ?>
                <center>
                    <h1 style="font-weight: bold">EDIT DATA BPJS</h1>
                    <hr style="opacity: 1">
                </center>
                <div class="col-7" style="margin: auto;">
                <form action="daftar_update.php" method="post">
                    <input type="hidden" name="id" value="<?= $edit['id_data']; ?>">
                    <div class="form-outline mb-4" style="width: 100%; background-color: blanchedalmond;" align="left">
                        <label class="form-label">Nama</label>
                        <input style="border-color: black; border: 1px solid; border-radius: 5px" class="form-control" type="text" name="nama" value="<?= $edit['nama']; ?>" required>
                    </div>
                    <div class="form-outline mb-4" style="width: 100%; background-color: blanchedalmond;" align="left">
                        <label class="form-label">Tanggal lahir</label>
                        <input style="border-color: black; border: 1px solid; border-radius: 5px" class="form-control" type="text" name="tanggal_lahir" value="<?= $edit['tanggal_lahir']; ?>" required>
                    </div>
                    <div class="form-outline mb-4" style="width: 100%; background-color: blanchedalmond;" align="left">
                        <label class="form-label">Alamat</label>
                        <input style="border-color: black; border: 1px solid; border-radius: 5px" class="form-control" type="text" name="alamat" value="<?= $edit['alamat']; ?>" required>
                    </div>
                    <div class="form-outline mb-4" style="width: 100%; background-color: blanchedalmond;" align="left">
                        <label class="form-label">Telepon</label>
                        <input style="border-color: black; border: 1px solid; border-radius: 5px" class="form-control" type="text" name="telepon" value="<?= $edit['telepon']; ?>" required>
                    </div>
                    <center>
                    <div class="form-outline mb-4" style="width: 100%;" align="left">
                        <label class="form-label">Layanan Kesehatan</label>
                        <select style="border-color: black; border: 1px solid; border-radius: 5px; background-color: blanchedalmond;" class="form-select" name="nama_falkes" style="color: black; width: 100%; margin-top: 10px;";>
                            <?php
                            $sql = "SELECT * FROM falkes";
                            $query = mysqli_query($connect, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                                if ($edit['id_falkes'] == $data['id_falkes']) {
                                       $select = "selected";
                                            } else {
                                                $select = "";
                                            }
                                            echo "<option $select value=" . $data['id_falkes'] . ">" . $data['nama_falkes'] . "</option>";
                                        }
                                        ?>
                        </select>
                    </div>
                    <div class="form-outline mb-4" style="width: 100%; background-color: blanchedalmond;" align="left">
                        <label class="form-label">Golongan</label>
                        <select style="border-color: black; border: 1px solid; border-radius: 5px; background-color: blanchedalmond" class="form-select" name="nama_golongan" style="color: black; width: 100%;">
                            <?php
                            $sql = "SELECT * FROM golongan";
                            $query = mysqli_query($connect, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                                if ($edit['id_golongan'] == $data['id_golongan']) {
                                       $select = "selected";
                                            } else {
                                                $select = "";
                                            }
                                            echo "<option $select value=" . $data['id_golongan'] . ">" . $data['nama_golongan'] . "</option>";
                                        }
                                        ?>
                        </select>
                    </div>
                    </center>
                    <br>
                    <button class="login btn btn-outline-primary text-center" type="submit" style="width:49%">Ubah</button>
                    <button class="login btn btn-outline-primary text-center" type="reset" style="width:49%">Reset</button>
                </form>
            </div>
            </div>
        </div>
    </div>
<!-- EDIT INPUT BIODATA -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>




    