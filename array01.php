<?php
    include 'header.php';
?>
<hr><br>
<form action="" method="POST">
    <input type="text" name="boeh">
    <input type="submit" name="tamah" value="cek men">
</form>

<?php
    if(isset($_POST['tamah'])){
        $boeh=$_POST['boeh'];

        $arrboeh=[
                "mamplang",
                "unami",
                "jambe",
                "jambe kleng"
        ];
        if($boeh=$arrboeh[1]){
            echo "$arrboeh[1]";
        }
    }
?>
<hr> <br>

<!-- pembuatan tata array -->
<?php
    //metode pertama
    $arrbuah=array ("Mangga", "Apel", "Pisang", "Jeruk");
    echo "$arrbuah[1]"; 
    echo "$arrbuah[2] <br>"; 

    //metode kedua 
    $arrwarna=array();
    $arrwarna[]="Merah";
    $arrwarna[]="Biru";
    $arrwarna[]="Hijau";
    $arrwarna[]="Putih";
    echo "$arrwarna[0]";
    echo "$arrwarna[2] <br>";

    // metode ketiga
    $arrhewan=[
            "Kucing",
            "Ula",
            "Anjing",
            "Mantanwkwkw"
            ];
            echo "$arrhewan[2]";
            echo "$arrhewan[3] <br>";
?>

<br><hr>

<form action="" method="POST">
    <div class="container">
        <div class="row">
            <input type="text" name="warna">
            <input type="submit" name="tamah" value="cek men">
</form>
        </div>
    </div>
    
    <?php
        if(isset($_POST['tamah'])){
            $warna=$_POST['warna'];
            $warna_warna=[
                "Kuning",
                "Merah",
                "Biru",
                "Hijau"
            ];  
            if ($warna=$warna_warna[0]){
                echo "<h1 style='color:yellow;'>$warna_warna[0]</h1>";
            }else if ($warna=$warna_warna[1]){
                echo "<h1 style='color:white;'>$warna_warna[1]</h1>";
            }
        }
    ?>