<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian</title>
    <link rel="stylesheet" type="text/css" href="formpenilaian.css">
</head>
<body>
    <div class="main">
        <h1>Edit Form Penilaian</h1>
        <?php 
	        include "koneksi.php";
	        $id = $_GET['id'];
	        $sql = "SELECT * FROM nilai WHERE id='$id'" or die(mysql_error());
            $baca = mysqli_query($db, $sql );
	        $nomor = 1;
	        while($data = mysqli_fetch_array($baca)){
	    ?>
        <form method="post" action="update.php" >
            <label><b>Nama Cafe:</b></label>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input class="input" type="text" name="cafe" value="<?php echo $data['cafe'] ?>"><br>
            <label><b>Lokasi:</b></label>
            <input class="input" type="text" name="lokasi" value="<?php echo $data['lokasi'] ?>"><br>
            <label><b>Kriteria Nilai Menu:</b></label><br>
            <select name="menu" id="jenis" value="<?php echo $data['menu'] ?>">
                <option value="Enak">Enak</option>
                <option value="Biasa Saja">Biasa Saja</option>
                <option value="Tidak Enak">Tidak Enak</option>
            </select> <br><br>
            <label><b>Kriteria Nilai Kenyaman Tempat:</b></label><br>
            <select name="tempat" id="jenis" value="<?php echo $data['tempat'] ?>">
                <option value="Nyaman">Nyaman</option>
                <option value="Biasa Saja">Biasa Saja</option>
                <option value="Tidak Nyaman">Tidak Nyaman</option>
            </select> <br><br>
            <label><b>Kriteria Nilai Pelayanan:</b></label><br>
            <select name="service" id="jenis" value="<?php echo $data['pelayan'] ?>">
                <option value="Baik">Baik</option>
                <option value="Biasa Saja">Biasa Saja</option>
                <option value="Buruk">Buruk</option>
            </select> <br><br>
            <label><b>Kriteria Nilai Fasilitas:</b></label><br>
            <select name="fasilitas" id="jenis" value="<?php echo $data['fasilitas'] ?>">
                <option value="Lengkap">Lengkap</option>
                <option value="Cukup">Cukup</option>
                <option value="Tidak Lengkap">Tidak Lengkap</option>
            </select> <br><br>
            <labe><b>Testimoni:</b></label><br>
                <textarea cols="40" rows="8" name="testimoni" value="<?php echo $data['testimoni'] ?>"></textarea><br><br>
            <div align="center">
                <input class="tombol" align="center" type="submit" name="submit" value="SAVE">
                <input class="tombol" align="center" type="reset" name="reset" value="CANCEL">
            </div>
        </form>
        <?php } ?>
    </div>
    
</body>
</html>