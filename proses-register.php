<?php
include 'koneksi.php'; 

$username = ucwords($_POST['username']);
$password = $_POST['password'];
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$alamat = ucwords($_POST['alamat']);
					   
$insert = mysqli_query($koneksi, "INSERT INTO user (username, password, email, namalengkap, alamat) VALUES('$username','$password','$email','$namalengkap','$alamat')");

if($insert){
    echo '<script>alert("Registrasi berhasil")</script>';
    echo '<script>window.location="login.php"</script>';
}else{
    echo 'gagal '.mysqli_error($koneksi);
}


?>