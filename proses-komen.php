<?php
session_start();
include 'koneksi.php';

$fotoid             = $_POST['fotoid'];
$userid             = $_SESSION['id'];
$isikomentar        = $_POST['isikomentar'];
$tanggalkomentar    = date('Y-m-d');

$sql  = mysqli_query($koneksi, "INSERT INTO komentarfoto VALUES('','$fotoid','$userid','$isikomentar','$tanggalkomentar')");

echo '<script>window.location="detail-image.php?id='.$fotoid.'"</script>';
?>