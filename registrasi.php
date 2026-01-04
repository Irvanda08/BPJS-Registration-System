<?php 
require 'koneksi.php';

if(isset($_POST["registrasi"])){
    if(registrasi($_POST) > 0){
      echo "<script>
            alert('registrasi berhasil');
            document.location.href = 'login_user.php'
            </script>
            ";
    }else{
      echo "<script>
            alert('registrasi gagal')
            </script>
            ";
    }
}

?>
<html>
  <title>REGISTRASI</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="">
  <body>
    <section class="vh-100" style="background-color: darkcyan;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="images/bpjs.jpg" class="img-fluid" style="border-radius: 1rem 0 0 1rem; margin-top: 150px;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black"><br>

                <form method="POST" action="">

                  <div align="center" >
                    <span class="h1 fw-bold mb-0">Daftar</span>
                  </div><br>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">*Masukkan username dan password yang diinginkan</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Username</label>
                    <input type="text" name="username" id="form2Example17" class="form-control form-control-lg" required />
                    
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" required />
                    
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit" name="registrasi" style="width: 100%">Daftar</button>
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Anda sudah punya akun? <a href="index.php"
                      style="color: #393f81;">Masuk disini</a></p>
                  
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
</html>