<?php
    session_start();
	include 'koneksi.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE userid ='".$_SESSION['id']."'");
	$d = mysqli_fetch_object($query);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dypicture</title>
<link rel="stylesheet" type="text/css" href="scss/style.css">
</head>
<style>
                .logo{
                    width:6%;
                }
                .text{

                }
                </style>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><img src="img/logohh.png" class="logo"></img><a href="index.php" class="text">   Dypicture</a></h1>

        <ul>
           <li><a href="dashboard.php">Dashboard</a></li>
           <li><a href="album.php">Album</a></li>
           <li><a href="galeri.php">Gallery</a></li>
           <li><a href="data-image.php">Data Foto</a></li>
           <li><a href="profil.php">Profil</a></li>

           
        </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Profil</h3>
            <div class="box">
               <form action="" method="POST">
                   <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->namalengkap ?>" required>
                   <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
                   <input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->email ?>" required>
                   <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->alamat ?>" required>
                   <input type="submit" name="submit" value="Ubah Profil" class="btn">
                   <a href="Keluar.php" class="btn" style="background-color:red;">Logout</a>
               </form>
               <?php
                   if(isset($_POST['submit'])){
					   
					   $nama   = $_POST['nama'];
					   $user   = $_POST['user'];
					   $email  = $_POST['email'];
					   $alamat = $_POST['alamat'];
					   
					   $update = mysqli_query($koneksi, "UPDATE user SET 
					                  namalengkap = '".$nama."',
									  username = '".$user."',
									  email = '".$email."',
									  alamat = '".$alamat."'
									  WHERE userid = '".$d->userid."'");
					   if($update){
						   echo '<script>alert("Ubah data berhasil")</script>';
						   echo '<script>window.location="profil.php"</script>';
					   }else{
						   echo 'gagal '.mysqli_error($conn);
					   }
					   
					}  
			   ?>
            </div>
            
            <h3>Ubah password</h3>
            <div class="box">
               <form action="" method="POST">
                   <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
                   <input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
                   <input type="submit" name="ubah_password" value="Ubah Password" class="btn">
               </form>
               <?php
                   if(isset($_POST['ubah_password'])){
					   
					   $pass1   = $_POST['pass1'];
					   $pass2   = $_POST['pass2'];
					   
					   if($pass2 != $pass1){
						   echo '<script>alert("Konfirmasi Password Baru tidak sesuai")</script>';
					   }else{
						   $u_pass = mysqli_query($koneksi, "UPDATE user SET 
									  password = '".$pass1."'
									  WHERE userid = '".$d->userid."'");
						   if($u_pass){
							   echo '<script>alert("Ubah data berhasil")</script>';
						       echo '<script>window.location="profil.php"</script>';
						   }else{
							   echo 'gagal '.mysqli_error($conn);
						   }
					   }
					  
					}  
			   ?>
            </div>
        </div>
        </div>
    </div>
    
    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2024 - Dypicture.</small>
        </div>
    </footer>
</body>
</html>