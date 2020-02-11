<!-- persentase Diskon -->

<?php
    $kauskaki=100000;
    $diskon=0.1;

    $harga_net=$kauskaki-($kauskaki*$diskon);
    echo "Harga yang harus dibayar = Rp.$harga_net"
?>
<br>

<?php
    $halaman=13;
    if($halaman%2==0)
    echo'halaman genap';
    else if ($halaman%3==2)
    echo 'halaman utama';
    else 
    echo'halaman ganjil';
?>

<!-- operator/kalkulator1 -->
<?php
    $a=10;
    $b=5;
    $c=7;
    $d=8;
    
    $kali=($a*$b);
    $tambah=($a+$c);
    $kurang=($b-$d);
    $bagi=($a/$b);
    $hasil=$kali;

    if($hasil==50){
        echo "Nilai anda adalah $kali";
    }else if($hasil==17){
        echo "Nilai anda adalah $tambah";
    }else if($hasil==-3){
        echo "Nilai anda adalah $kurang";
    }else if($hasil==2){
        echo "Nilai anda adalah $bagi";
    }
?>

<!-- operator/perkalian -->


<br>
<br>
<br>
<br>
<br>


<!-- penampilan menentukan variabel data siswa -->

<?php
    $nim="160202047";
    $nama='Rahmat Taisir';
    $umur="23 Tahun";
    $nilai=99.99;
    $status=FALSE;

    echo "NIM : $nim <br>";
    echo "NAMA : $nama <br>";
    print "UMUR :".$umur; print "<br>";
    printf ("Nilai : %.2f<br>", $nilai);
    if ($status)
    echo "status : Aktif";
    else 
    echo "status : Tidak Aktif"; 
?>

<br>
<br>
<br>
<br>
<!-- variabel define -->

<?php
    define ("nama","Rahmat Taisir Bin Basri <br>");
    define ("alamat","Sawang, Aceh Selatan <br>");
    define ("Umur","22 Tahun <br>");
    define ("Status","Nikah <br>");
    define ("no_hp","0"."8221072643 <br>");

    // output
    echo "nama:",nama ;
    echo "alamat:",alamat;
    echo "Umur:",Umur;
    echo "Status:",Status;
    echo "no_hp:",no_hp;
?>

<br>
<br>
<br>
<br>

<!-- hitungan baru -->

<?php
    $gaji=3000000;
    $pajak=2.5;
    $thp=$gaji-($gaji*$pajak);

    echo "Gaji Sebelum pajak= Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang= Rp. $thp";
?>

<br>
<br>
<br>
<!--  -->
<?php
    $a=5;
    $b=4;

    echo "$a==$b:".($a==$b);
    echo "<br>$a!=$b:".($a !=$b);
    echo "<br>$a>$b:".($a>$b);
    echo "<br>$a<$b:".($a<$b);
    echo "<br>($a!$b) && ($a.$b) :".(($a !=$b)&& ($a>$b));
    echo "<br>($a!$b) || ($a>$b) :".(($a !=$b)|| ($a>$b));
?>

<br>
<br>
<br>

<!-- ini tugas dari baoak ade -->

<?php
    $hari="sabtu";
    if ($hari=="senin"){
        echo "bawa mantan";
    }else if ($hari=="selasa"){
        echo "bawa ibu mantan";
    }else if ($hari=="rabu"){
        echo "bawa janda kaya tapi muda";
    }else if ($hari=="kamis"){
        echo "bawa janda cantik nggak kaya amat";
    }else if ($hari=="jumat"){
        echo "taubat";
    }else if ($hari=="sabtu"){
        echo "mulai lagi";
    }else {
        echo "nikahin semua";
    }
?>
<br>
<br>
<br>
<br>

<!-- pemberian nilai -->
<?php
    $nama='Rahmat Taisir';
    $nim=160202047;
    $jurusan="Teknik Nahu Sharaf";
    $mata_kuliyah='Filsafat Pendidikan';
    $nilai=101;

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
