<?php

   include 'koneksi.php';
      
   if(isset($_GET['idp'])){
	   $foto = mysqli_query($koneksi, "SELECT * FROM album WHERE albumid = '".$_GET['idp']."' ");
	   $p = mysqli_fetch_object($foto);
	   
	   unlink('./foto/'.$p->image);
	   
	  $delete = mysqli_query($koneksi, "DELETE FROM album WHERE albumid = '".$_GET['idp']."' ");
	  echo '<script>window.location="album.php"</script>';
   }

?>