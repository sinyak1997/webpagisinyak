<?php
    include 'header.php';
?>

<?php
    $hari= "homkah";
    switch ($hari) {
        case 'MIG': $hari="Minggu"; break;
        case 'SEN': $hari="Senin"; break;
        case 'SEL': $hari="Selasa"; break;
        case 'RAB': $hari="Rabu"; break;
        case 'KAM': $hari="Kamis"; break;
        case 'JUM': $hari="Jumat"; break;
        case 'SAB': $hari="Sabtu"; break;
        default   : $hari="Pantengoeng";
    }
    echo "bangai that, nan uroe hana teupeu <b> $hari </b>";
?>
<br>
<hr>
<?php
    $tahun="2015";
    $kabisat=($tahun%4==0)?"KABISAT":"BUKAN KABISAT";
    echo "Tahun<b>$tahun</b> $kabisat";
?>