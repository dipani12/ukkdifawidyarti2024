<?php
    session_start();
    include 'koneksi.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
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
           <li><a href="galeri.php">Gallery</a></li>
           <li><a href="data-image.php">Data Foto</a></li>
           <li><a href="profil.php">Profil</a></li>
          
        </ul>
        </div>
    </header>
    
      <!-- search -->
      <div class="search">
        <div class="container">
            <form action="galeri.php">
               <input type="text" name="search" placeholder="Cari Foto" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" />
<input type="hidden" name="kat" value="<?php echo isset($_GET['kat']) ? $_GET['kat'] : ''; ?>" />

                <input type="submit" name="cari" value="Search" />
            </form>
        </div>
    </div>
    
      <!-- content -->
      <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->namalengkap ?> di Website Galeri Foto</h4>
            </div>
        </div>
    </div>

    <<!-- category -->
    <div class="section">
        <div class="container">
            <h3>Album</h3>
            <div class="box">
            <?php
                    $album = mysqli_query($koneksi, "SELECT * FROM album ORDER BY albumid DESC");
					if(mysqli_num_rows($album) > 0){
						while($a = mysqli_fetch_array($album)){
				?>
                    <a href="cari.php?kat=<?php echo $a['namaalbum'] ?>">
                        <div class="col-5">
                            <img src="img/album.png" width="50px" style="margin-bottom:5px;" />
                            <p style="font-family: Cambria;"><?php echo $a['namaalbum'] ?></p>
                        </div>
                    </a>
                <?php }}else{ ?>
                     <p>Kategori tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>
                        
     <!-- new product -->
     <div class="container">
        <br>
       <h3>Foto Terbaru</h3>
       <div class="box">
          <?php
              $foto = mysqli_query($koneksi, "SELECT * FROM foto1 ORDER BY fotoid DESC LIMIT 8");
			  if(mysqli_num_rows($foto) > 0){
				  while($p = mysqli_fetch_array($foto)){
		  ?>
          <a href="detail-image.php?id=<?php echo $p['fotoid'] ?>">
          <div class="col-4">
              <img src="foto/<?php echo $p['lokasifile'] ?>" height="150px" />
              <p class="nama"><?php echo substr($p['judulfoto'], 0, 30)  ?></p>
              <p class="admin">Nama User : <?php echo $p['namalengkap'] ?></p>
              <p class="nama"><?php echo $p['tanggalunggah']  ?></p>
          </div>
          </a>
          <?php }}else{ ?>
              <p>Foto tidak ada</p>
          <?php } ?>
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