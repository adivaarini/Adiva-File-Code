<?php 

include 'koneksi.php';
$id = $_POST['id'];
$cafe    = $_POST['cafe'];
$lokasi   = $_POST['lokasi'];
$menu    = $_POST['menu'];
$tempat    = $_POST['tempat'];
$service    = $_POST['service'];
$fasilitas    = $_POST['fasilitas'];
$testimoni    = $_POST['testimoni'];

$sql = "UPDATE nilai SET (cafe='$cafe', lokasi='$lokasi', menu='$menu', tempat='$tempat', pelayanan='$service', fasilitas='$fasilitas', testimoni='$testimoni' WHERE id='$id')";
$baca = mysqli_query($db, $sql );
header("location:viewdata.php?pesan=update");

?>