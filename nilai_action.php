<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Nim :</label>
            <input type="number" name="nim" placeholder="Masukkan Nim Anda"> <br><br>
        <label>Nama :</label>
            <input type="text" name="nama" placeholder="Masukkan Nama anda"> <br><br>
        <label>Jurusan :</label>
            <input type="text" name="jurusan" placeholder="Masukkan Jurusan anda"> <br><br>
        <label>Harian :</label>
            <input type="number" name="harian" placeholder="Masukkan Nilai">
        <label>Quiz :</label>
            <input type="number" name="quiz" placeholder="Masukkan Nilai">
        <label>Uts :</label>
            <input type="number" name="uts" placeholder="Masukkan Nilai">
        <label>Uas :</label>
            <input type="number" name="uas" placeholder="Masukkan Nilai">  

        <input type="submit" name="tambah" value="gaskan men"><br>    
    </form>
<?php
    if (isset($_POST['tambah'])){
        $nim=$_POST ['nim'];
        $nama=$_POST ['nama'];
        $jurusan=$_POST ['jurusan'];
        $harian=100*10/100;$_POST ['harian'];
        $quiz=85*15/100;$_POST ['quiz'];
        $uts=50*35/100;$_POST ['uts'];
        $uas=95*40/100;$_POST ['uas'];
        $nilai=($harian)+($quiz)+($uts)+($uas);

        if ($nilai<=50){
            echo "Nilai $nama dengan $nim di $jurusan nilai yang akan tertera $nilai adalah E <br>";
        }else if ($nilai<=65){
            echo "Nilai $nama dengan $nim di $jurusan nilai yang akan tertera $nilai adalah D <br>";
        }else if ($nilai<=72){
            echo "Nilai $nama dengan $nim di $jurusan nilai yang akan tertera $nilai adalah C <br>";
        }else if ($nilai<=83){
            echo "Nilai $nama dengan $nim di $jurusan nilai yang akan tertera $nilai adalah B <br>";
        }else if ($nilai<=100 || $nilai>=100){
            echo "Nilai $nama dengan $nim di $jurusan nilai yang akan tertera $nilai adalah A <br>";
        }
        
        echo "nim $nim <br>";
        echo "nama $nama <br>";
        echo "jurusan $jurusan <br>";
        echo "harian $harian <br>";
        echo "quiz $quiz <br>";
        echo "uts $uts <br>";
        echo "uas $uas <br>";
    }    
?>

    <?php
        include 'footer.php';
    ?>

</body>
</html>