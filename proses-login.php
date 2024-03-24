<?php
	 session_start();
     include 'koneksi.php';

     $email = mysqli_real_escape_string($koneksi, $_POST['email']);
     $password = mysqli_real_escape_string($koneksi, $_POST['password']);
     
     $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '".$email."'AND password = '".$password."'");
     if(mysqli_num_rows($cek) > 0){
         $d = mysqli_fetch_object($cek);
         $_SESSION['status_login'] = true;
         $_SESSION['a_global'] = $d;
         $_SESSION['id'] = $d->userid;
         echo '<script>window.location="dashboard.php"</script>';
     }else{
         echo '<script>alert("Email atau Password anda salah");   location.href="index.php";</script>';
     }
 


?>

