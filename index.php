<!DOCTYPE html>
<html lang="en">
<head>
	<title>HOME</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
     <div class="banner" style="margin-top: -50px;">
         <div class="app-text">
             <h3><br></h3>
             <h1>BPJS<br>Kesehatan</h1>
             <p>BPJS Kesehatan adalah program pemerintah yang ditujukan untuk memberikan jaminan kesehatan kepada seluruh rakyat Indonesia.</p>

             <div class="btn-group">
                 <div class="signup-btn" style="background-color: green"><a href="daftar.php" style="color: white; text-decoration: none;">Daftar sekarang</a></div>
                 <div class="play-btn">
                     <div class="play-btn-inner"><a href="https://youtu.be/_boSS2uf4ns" style="color: white";>
                         <i class="fa fa-play"></i></a>
                     </div>
                     <span> <a href="https://youtu.be/_boSS2uf4ns" style="color: black; text-decoration: none";>Pelajari lebih lanjut</a></span>
                 </div>
             </div>
         </div>
         <div class="app-picture">
             <img style=" width: 40%; margin-left: 30px;" src="images/medic.png">
         </div>
     </div>

     <div class="social-icons">
         <ul><br><br>
            <li><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwizpJfq0Kr7AhWD0nMBHSSBCnEQtwJ6BAgLEAE&url=https%3A%2F%2Fwww.youtube.com%2Fc%2FBPJSKesehatanChannel&usg=AOvVaw18E5WR4gdunoFvAae2WyZ_"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjRscv6zKr7AhUJ2nMBHfDtDu8Q6F56BAg0EAE&url=https%3A%2F%2Ftwitter.com%2FBPJSKesehatanRI%3Fref_src%3Dtwsrc%255Egoogle%257Ctwcamp%255Eserp%257Ctwgr%255Eauthor&usg=AOvVaw01ruV6zNijafHFkxqHkD73"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwigwYjV0Kr7AhU81HMBHYj1CQAQFnoECB0QAQ&url=https%3A%2F%2Fwww.instagram.com%2Fbpjskesehatan_ri%2F&usg=AOvVaw30qh6qAvO10YMBXTvid4YK"><i class="fa fa-instagram"></i></a></li>
         </ul>
     </div>
    </div>
</body>
<footer align="center" style="background-color:#106cfc; color: whitesmoke; font-style: arial; padding: 15px; position: fixed; left: 0; bottom: 0; width: 100%;">
    &copy;2022 Copyright: <a href="https://bpjs-kesehatan.go.id/bpjs/" style="color: lightgray;">BPJS Kesehatan</a>
</footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>