<?php
    include 'header.php';
?>

<?php
    $arrnilai=array("Ani"=>80,"otim"=>90,"Ana"=>75,"Budi"=>85);

    echo "Menampilkan isi array dengan foreach:<br>";
    foreach ($arrnilai as $nama => $nilai){
        echo "Nilai $nama=$nilai <br>";
    }
    reset ($arrnilai);
    echo "<br>Menampilkan isi array dengan while dan list:<br>";
    while (list($nama, $nilai)=each($arrnilai)){
        echo"Nilai $nama=$nilai<br>";
    }
?>

<br><hr>

<?php
    $warna=array("blue","black","red","yellow","green");
    $nilai=array("ani"=>80,"budi"=>90,"anto"=>75,"bayu"=>85);

    echo "<prev>";
    print_r ($warna);
    echo "<br>";
    print_r ($nilai);
    echo "</prev>";
?>