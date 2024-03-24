<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dypicture</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <style>
    button:hover {
      background-color: #e83e8c !important;
      opacity: 0.8; 
    }
    .col-md-5{
      margin-top: 60px;
    }
  </style>

</head>

<body class="bg-gradient-to-b from-pink-500 to-white-900 ">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Masukan Biodata Untuk Mendaftar Aplikasi Dypicture!!</h1>
                  </div>
                  <form method="post" action="proses-register.php" class="user">
                    <!-- <div class="form-group">
                      <input name ="UserID" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan UserID Anda..."required>
                    </div> -->
                    <div class="form-group">
                     <input name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username Anda..."required>
                    </div>
                    <div class="form-group">
                     <input name="password" type="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Password Anda..."required>
                    </div>
                    <div class="form-group">
                      <input name="email" type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder=" Masukan Email Anda"required>
                    </div>
                    <div class="form-group">
                     <input name="namalengkap" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap  Anda..."required>
                    </div>
                    <div class="form-group">
                     <input name="alamat" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Alamat  Anda..."required>
                    </div>
                    <button type="submit" name="kirim" class="btn btn-primary btn-user btn-block bg-pink-500 mb-2">
                      Register
                    </button>
                    
                    <a href="login.php" class="btn btn-success btn-user btn-block">
                      <i class="fa fa-laptop fa-fw"></i> Sudah  Punya Akun? Silahkan Login
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
