<?php
    include 'header.php';
?>

<?php
    $nama='Rahmat Taisir';
    $nim=160202047;
    $jurusan="Teknik Nahu Sharaf";
    $mata_kuliyah='Filsafat Pendidikan';
    $harian=100*10/100;
    $quis=85*15/100;
    $uts=50*35/100;
    $uas=95*40/100;
    $nilai=($harian)+($quis)+($uts)+($uas);
    

    if ($nilai<=50){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah E <br>";
    }else if ($nilai<=65){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah D <br>";
    }else if ($nilai<=72){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah C <br>";
    }else if ($nilai<=83){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah B <br>";
    }else if ($nilai<=100 || $nilai>=100){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah A <br>";
    }
?>
<br>
<hr>
<?php
    $nama='Rahmad Ade Akbar';
    $nim=160202047;
    $jurusan="Teknik Nahu Sharaf";
    $mata_kuliyah='Filsafat Pendidikan';
    $harian=100;
    $quis=82;
    $uts=63;
    $uas=85;
    $nilai=($harian*10/100)+($quis*15/100)+($uts*35/100)+($uas*40/100);
    

    if ($nilai<=50){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah E <br>";
    }else if ($nilai<=65){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah D <br>";
    }else if ($nilai<=72){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah C <br>";
    }else if ($nilai<=83){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah B <br>";
    }else if ($nilai<=100 || $nilai>=100){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah nilai yang akan tertera $nilai adalah A <br>";
    }
?>

