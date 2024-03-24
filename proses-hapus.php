<?php

   include 'koneksi.php';
      
   if(isset($_GET['idp'])){
	   $foto = mysqli_query($koneksi, "SELECT * FROM foto1 WHERE fotoid = '".$_GET['idp']."' ");
	   $p = mysqli_fetch_object($foto);
	   
	   unlink('./foto/'.$p->image);
	   
	  $delete = mysqli_query($koneksi, "DELETE FROM foto1 WHERE fotoid = '".$_GET['idp']."' ");
	  echo '<script>window.location="data-image.php"</script>';
	  echo '<script>alert("Hapus foto berhasil")</script>';
	
   }

?>