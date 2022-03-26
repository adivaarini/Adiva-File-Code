<?php 
include 'koneksi.php';
$id = $_GET['id'];
"DELETE FROM nilai WHERE id='$id'"or die(mysql_error());

header("location:viewdata.php?pesan=hapus");

$sql = "DELETE FROM nilai WHERE id='$id'"or die(mysql_error());
$baca = mysqli_query($db, $sql );

if ($baca) {
    echo "<script>
        alert('Data Berhasil Dihapus');
        window.location='viewdata.php';
    </script>";
}
else{
    echo "<script>
        alert('Data Gagal Dihapus');
        window.location='viewdata.php';
    </script>";
}
?>