<?php
    error_reporting(0);
    session_start();
    include 'koneksi.php';
	$kontak = mysqli_query($koneksi, "SELECT email, namalengkap, alamat FROM user WHERE userid = 2");
	$a = mysqli_fetch_object($kontak);
	
	$produk = mysqli_query($koneksi, "SELECT * FROM foto1 WHERE fotoid = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
    $k = mysqli_query($koneksi, "SELECT * FROM komentarfoto WHERE fotoid = '".$_GET['id']."' ");
    $kid = mysqli_fetch_object($k);
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
                <input type="text" name="search" placeholder="Cari Foto" value="<?php echo $_GET['search'] ?>" />
                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>" />
                <input type="submit" name="cari" value="Cari Foto" />
            </form>
        </div>
    </div>
    
    <!-- product detail -->
    <div class="section">
        <div class="container">
             <h3>Detail Foto</h3>
            <div class="box">
                <div class="col-2">
                   <img src="foto/<?php echo $p->lokasifile ?>" width="100%" /> 
                </div>
                <div class="col-2">
                   <h3 style="font-family: Cambria;"><?php echo $p->judulfoto ?><br />Album : <?php echo $p->namaalbum  ?></h3>
                   <h4 style="font-family:Cambria;">Nama User : <?php echo $p->namalengkap ?><br />
                   Upload Pada Tanggal : <?php echo $p->tanggalunggah  ?></h4>
                   <p style="font-family : Times New Roman;">Deskripsi :<br />
                        <?php echo $p->deskripsifoto ?>
                   </p>
                   <?php
                    $fotoid = $_GET['id'];
                    $userid=$_SESSION['id'];
                    $ceksuka = mysqli_query($koneksi, "SELECT * FROM likefoto1 WHERE fotoid='$fotoid' AND userid='$userid'");
                    ?>
                    <?php
                    $sel = (mysqli_query($koneksi, "SELECT SUM(suka) AS jm FROM likefoto1 WHERE fotoid = '".$_GET['id']."'"));
                    if(mysqli_num_rows($sel) > 0){
                        while($q = mysqli_fetch_array($sel)){
                            ?>
                    <a href="proses-like.php?id=<?php echo $p->fotoid ?>" class="text-lg mr-3  <?php echo (mysqli_num_rows($ceksuka) == 1) ? 'text-sky-500' : 'text-gray-500'; ?> focus:outline-none">
                    <img src="img/like.png" width="40px" style="margin-bottom:5px;">
                    <span class="text-lg text-black"><?php echo $q['jm'] ?></span>
                <?php }} ?>
                     
                    </a>
                    
                    
                   

</div>
    
    <!-- komen -->
    <div class=komen>
<form action="proses-komen.php" method="post">
<input type="hidden" name="fotoid" value="<?php echo $_GET['id']; ?>">
<div class="relative flex justify-between -bottom-3 md:bottom-0 width:50px">
    <textarea name="isikomentar" class="w-full border p-2 mb-4" placeholder="Tulis komentar" style="width:40%";></textarea>
    <button type="submit" class="bg-blue-500 text-white h-[30px] px-2">Kirim</button>
</div>
</form>
</div>
</div>
<div class="komentar">
        <div class="card">
            <h3 class="text-komentar">Komentar</h3>
            
            <?php 
                if(isset($_GET['id'])) {
                $FotoID = $_GET['id'];
                }
                $sql = mysqli_query($koneksi, "SELECT * FROM komentarfoto INNER JOIN user ON komentarfoto.userid=
                user.userid WHERE komentarfoto.fotoid='$FotoID'");
                while($data = mysqli_fetch_array($sql)){?>
                    <div class="box1">
            <p class="badge"><?=$data['username']?></p>
            <p class="isi-komentar"><?=$data['isikomentar']?><br><?=$data['tanggalkomentar']?></p>
            <!-- Tambahkan link untuk menghapus komentar -->
            <button><a href="hapus-komen.php?KomentarID=<?=$data['komentarid']?>&Fotoid=<?=$FotoID?>">Hapus</a></button>
        </div>
           <?php }?>
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