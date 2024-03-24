<?php
    session_start();
	include 'koneksi.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
	
	$produk = mysqli_query($koneksi, "SELECT * FROM  album WHERE albumid = '".$_GET['id']."'");
	if(mysqli_num_rows($produk) == 0){
	    echo '<script>window.location="album.php"</script>';
	}
	$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dypicture</title>
<link rel="stylesheet" type="text/css" href="scss/style.css">
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
</head>
<style>
                .logo{
                    width:7%;
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
           <li><a href="data-image.php">Data Foto</a></li>
		   <li><a href="profil.php">Profil</a></li>
           
        </ul>
        </div>
    </header>
    
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Edit Album</h3>
            <div class="box">
    <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="alb" class="input-control" placeholder="Nama Album" value="<?php echo $p->namaalbum ?>">
            <textarea class="input-control" name="des" placeholder="Deskripsi Album"><?php echo $p->deskripsi ?></textarea><br />   
            <input type="submit" name="submit" value="Submit" class="btn">
               </form>
               <?php
                   if(isset($_POST['submit'])){
					
					// data inputan dari form
					$alb  = $_POST['alb'];
					$des      = $_POST['des'];
					
					//query update data produk
					$update = mysqli_query($koneksi, "UPDATE album SET
					                       namaalbum = '".$alb."',
										    deskripsi = '".$des."'
										   WHERE albumid = '".$p->albumid."' ");
					 if($update){
						echo '<script>alert("Ubah data berhasil")</script>';
					    echo '<script>window.location="album.php"</script>';
					 }else{
					    echo 'gagal'.mysqli_error($koneksi);
							   
						   }
			      }
			   ?>
        </div>
        </div>
    </div>
    
    <!-- footer -->
     <footer>
        <div class="container">
            <small>Copyright &copy; 2024 - Dypicture.</small>
        </div>
    </footer>
    <script>
            CKEDITOR.replace( 'deskripsi' );
    </script>
</body>
</html>