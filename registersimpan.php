<?php
include "koneksi.php";

$nama = $_POST['nama'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

$sql = "INSERT INTO register (nama, telpon, email, username, password) VALUES ('$nama', '$telp', '$email', '$username', '$pass')";
$baca = mysqli_query($db, $sql );

if ($baca) {
    echo "<script>
        alert('Data Berhasil Tersimpan');
        window.location='home.html';
    </script>";
}
else{
    echo "<script>
        alert('Data Gagal Disimpan');
        window.location='register.html';
    </script>";
}



?>
