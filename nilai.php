<?php
include "koneksi.php";
        $cafe    = $_POST['cafe'];
        $lokasi   = $_POST['lokasi'];
        $menu    = $_POST['menu'];
        $tempat    = $_POST['tempat'];
        $service    = $_POST['service'];
        $fasilitas    = $_POST['fasilitas'];
        $testimoni    = $_POST['testimoni'];

        $sql = "INSERT INTO nilai (cafe, lokasi, menu, tempat, pelayanan, fasilitas, testimoni) VALUES ('$cafe', '$lokasi', '$menu', '$tempat', '$service', '$fasilitas', '$testimoni')";
        $baca = mysqli_query($db, $sql );

if ($baca) {
    echo "<script>
        alert('Data Berhasil Tersimpan');
        window.location='viewdata.php';
    </script>";
}
else{
    echo "<script>
        alert('Data Gagal Disimpan');
        window.location='formnilai.html';
    </script>";
}



?>