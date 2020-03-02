<?php
    include 'header.php';
?>

<?php
    for($i=1;$i<=10;$i++){
        echo "Peupeugah";
    }
?>
<br>
<hr>
<?php
    $nilai=1;
    for($nilai;$nilai<=10;$nilai+=2){
        if($nilai%2==0){
            echo "$nilai adalah genap <br>";
        }else{
            echo "$nilai adalah ganjil <br>";
        }
    }
?>
<br><hr>
<?php
    // contoh 1
    for($i=1;$i<=10;$i++){
        echo "$i";
    }
    echo "<br><br>";
    // contoh 2 
    for($i=1; ;$i++){
        if ($i>10){
        break;
        }
        echo "$i";
    }
    echo "<br><br>";
    // contoh 3
    $i=1;
    for (;;){
        if ($i>10){
        break;
        }
        echo "$i";
        $i++;
    }echo "<br><br>";
    // contoh 4
    for ($i=1;$i<=10;print "$i",$i++)
?>