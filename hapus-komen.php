<?php
include 'koneksi.php';
session_start();

if (isset($_GET['KomentarID'])) {
    $komentarID = $_GET['KomentarID'];
    $fotoid = $_GET['Fotoid'];
    $sql = mysqli_query($koneksi, "DELETE FROM komentarfoto WHERE KomentarID='$komentarID'");

    echo '<script>window.location="detail-image.php?id='.$fotoid.'"</script>';
}

?>
