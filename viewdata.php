<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penilaian Cafe</title>
    <link rel="stylesheet" type="text/css" href="viewdata.css">
</head>
<body>
    <div class="main">
    <?php
    include "koneksi.php";
    ?>
    <a href="formnilai.html"><h2>+ Tambah Data</h2></a>
    <center>
        <h1>Halaman Tampil Hasil Penilaian Cafe</h1>
    </center>
    <center> 
        <table border="1"  width = "1450px" >
        <tr>
            <th>No</th>
            <th>Nama Cafe</th>
            <th>Lokasi</th>
            <th>Penilaian Menu</th>
            <th>Penilaian Kenyamanan Tempat</th>
            <th>Penilaian Pelayanan</th>
            <th>Penilaian Fasilitas</th>
            <th>Testimoni</th>
            <th>Hapus Data</th>
        </tr>
        <?php
        $sql = "SELECT * FROM nilai";
        $baca = mysqli_query($db, $sql ); //fungsi di php untuk membaca perintah sql
        $no = 1;
        while ($data=mysqli_fetch_array($baca)) {
            $cafe = $data[2];
            $lokasi = $data[3];
            $menu = $data[4];
            $tempat = $data[5];
            $service = $data[6];
            $fasilitas = $data[7];
            $testimoni = $data[8];
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $cafe?></td>
                <td><?php echo $lokasi?></td>
                <td><?php echo $menu?></td>
                <td><?php echo $tempat?></td>
                <td><?php echo $service?></td>
                <td><?php echo $fasilitas?></td>
                <td><?php echo $testimoni?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        $no++;
        } 
        ?>
        </table>
    </center><br><br>
        <div align="right">
            <a href="beranda.php"><button style="background-color:rgb(236, 201, 135);">Home</button></a>
            <a href="logout.php"><button style="background-color:rgb(236, 201, 135);">Log Out</button></a>
        </div>
    </body>
</html>