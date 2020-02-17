<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Nama Anda</label>
        <input type="text" name="nama" placeholder="Masukan nama anda"><br>
        <label>Email Anda</label>
        <input type="email" name="email" placeholder="contoh@gmail.com"><br>
        <label>Jenis Kelamin</label>
        <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
        <input type="radio" name="jk" value="Perempuan">Perempuan <br>
        <label>Alamat Anda</label>
        <textarea name="alamat"></textarea><br>
        <label>Tanggal</label>
        <input type="date" name="tanggal"><br>
        <label>Tempat Lahir :</label>
        <input type="text" name="tempat_lahir"><br>
        <label>No Hp :</label>
        <input type="number" name="no_hp"><br>
        <label>Hobbi :</label>
        <input type="checkbox" name="hobbi1" value="meukawe">Meukawe <br>
        <input type="checkbox" name="hobbi2" value="kem">Kem <br>
        <input type="checkbox" name="hobbi3" value="poeh_gop">Poeh Gop <br>

        <input type="submit" name="tambah" value="input"><br>
    </form>

<?php
    if (isset($_POST['input'])){
        $nama_saya=$_POST ['nama'];
        $email_saya=$_POST ['email'];
        $jenis_kelamin=$_POST ['jk'];
        $alamat=$_POST ['alamat'];
        $tanggal=$_POST ['tanggal'];
        $no_hp=$_POST ['no_hp'];
        $hobbi=$_POST ['hobi1'];
        $hobbi=$_POST ['hobi2'];
        $hobbi=$_POST ['hobi3'];
        echo "Nama Saya Adalah $nama_saya <br>";
        echo "Email Saya Adalah $email_saya <br>";
        echo "Saya seorang $jenis_kelamin <br>";
        echo "Alamat Saya di $alamat <br>";
        echo "Saya Lahir pada Tanggal $tanggal <br>";
        echo "Yempat Lahir Saya di $tempat_lahir <br>";
        echo "Hubungi Saya di nomor $no_hp <br>";
        echo "Hobbi Saya $hobbi1 <br>";
        echo "Hobbi Saya $hobbi2 <br>";
        echo "Hobbi Saya $hobbi3 <br>";
    }
?>
</body>
</html>
