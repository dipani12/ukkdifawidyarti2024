<?php 
include 'koneksi.php';
session_start();

if (isset($_POST['submit'])) {
    $namaalbum  = $_POST['namaalbum'];
    $deskripsi  = $_POST['deskripsi'];
    $tanggalbuat    = date('y-m-d');
    $userid = $_SESSION['a_global']->userid;

    $sql = mysqli_query($koneksi, "INSERT INTO album VALUES('','$namaalbum','$deskripsi','$tanggalbuat','$userid')");

    echo '<script>alert("Tambah album berhasil")</script>';
    echo '<script>window.location="album.php"</script>';
}else{
    echo 'gagal '.mysqli_error($koneksi);
}



if (isset($_POST['edit'])) {
   
    $namaalbum  = $_POST['namaalbum'];
    $deskripsi  = $_POST['deskripsi'];
    $tanggal    = date('y-m-d');
    $userid     = $_SESSION['userid'];

    $sql = mysqli_query($koneksi, "UPDATE album SET namaalbum='$namaalbum', deskripsi='$deskripsi', tanggaldibuat='$tanggal' WHERE albumid='$albumid'");

    echo '<script>alert("Edit album berhasil")</script>';
    echo '<script>window.location="album.php"</script>';
}else{
    echo 'gagal '.mysqli_error($koneksi);
}

if (isset($_POST['hapus'])) {
    $albumid = $_POST['albumid'];

    $sql = mysqli_query($koneksi, "DELETE FROM album WHERE albumid='$albumid'");

    echo '<script>alert("Hapus album berhasil")</script>';
    echo '<script>window.location="album.php"</script>';
}else{
    echo 'gagal '.mysqli_error($koneksi);
}

?>