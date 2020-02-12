<?php
    $nama='Rahmat Taisir';
    $nim=160202047;
    $jurusan="Teknik Nahu Sharaf";
    $mata_kuliyah='Filsafat Pendidikan';
    $harian=10;
    $quis=15;
    $uas=40;
    $uts=35;
    $nilai=$harian+$quis+$uas+$uts;
    

    if ($nilai<=50){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah adalah E <br>";
    }else if ($nilai<=65){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah adalah D <br>";
    }else if ($nilai<=72){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah adalah C <br>";
    }else if ($nilai<=83){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah adalah B <br>";
    }else if ($nilai<=100 || $nilai>=100){
        echo "Nilai $nama dengan $nim di $jurusan pada $mata_kuliyah adalah A <br>";
    }
?>