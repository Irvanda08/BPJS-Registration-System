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
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: -380px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampilbiodata.php">Home</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-danger"><a href="logout_admin.php" style="color: white; text-decoration: none">Logout</a></button>
      </form>
    </div>
  </div>
</nav>
        <!-- Background image -->
        <div id="intro-example" class="p-5 text-center bg-image">
            <div class="mask">
                <?php include 'koneksi.php'; ?>
                <div class="container-md 4" style="margin-top: 2cm;">
                    <form method="GET" action="">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="search" id="form1" class="form-control" name="cari" style="color:white;" />
                                <label class="form-label" for="form1" style="color:white;">Search</label>
                            </div>

                            <button type="submit" value="cari" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>

                        </div>
                    </form>
                </div>

                <div class="container-sm" style="margin-top: .3cm;">
                    <table class="table align-middle mb-0 bg-transparent"
                        style="padding-left: 3cm; padding-right: 3cm; color:#ffffff ;">
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Genre</th>
                            <th>Penulis</th>
                            <th>Tahun Penerbit</th>
                            <th>Sinopsis</th>
                        </tr>
                        <?php
                        if (isset($_GET['cari'])) {
                            $cari = $_GET['cari'];
                            $data = mysqli_query($connect, "SELECT * FROM buku WHERE judul_buku LIKE '%" . $cari . "%'");
                        } else {
                            $data = mysqli_query($connect, "SELECT * FROM buku");
                        }
                        $no = 1;
                        while ($d = mysqlI_fetch_array($data)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo $d['judul_buku']; ?>
                            </td>
                            <td>
                                <?php echo $d['genre_buku']; ?>
                            </td>
                            <td>
                                <?php echo $d['penulis_buku']; ?>
                            </td>
                            <td>
                                <?php echo $d['tahun_terbit']; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn btn-outline-info"><a style="text-decoration: none;" href=read.php?id_buku=<?php echo $d['id_buku'];?>>Sinopsis Buku</a></button>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="color: #000000; font-family: Montserrat;">
            © 2022 Copyright:
            <a style="color: #000000;" href="https://www.upnyk.ac.id/">UPN Veteran Yogyakarta</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>

</html>