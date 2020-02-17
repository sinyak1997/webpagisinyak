<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Harga Sepatu</label>
            <input type="number" name="harga_sepatu" placeholder="Masukkan jumlah harga">
        <label>Diskon</label>
            <input type="number" name="diskon" placeholder="Masukkan jumlah diskon">

            <input type="submit" name="tambah" value="cek men"><br>   
    </form>

    <?php
        if (isset($_POST['tambah'])){
            $harga_sepatu=$_POST ['harga_sepatu'];
            $diskon=$_POST ['diskon'];
            $syarat=400000;
            $beli=$harga_sepatu-($harga_sepatu*$diskon/100);

            if ($harga_sepatu>=$syarat){
                echo "Anda mendapatkan potongan harga $diskon %, total yang dibayar $beli";
            }else {
                echo "Anda miskin";
            }
        }
    ?>
</body>
</html>

