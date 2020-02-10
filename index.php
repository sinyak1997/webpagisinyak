<html>
    <body>
        <head>
            <title></title>
        </head>
        <?php
            $nama="Rahmat Taisir";
            $alamat="sawang, aceh selatan";
            $no_hp="082210726433";
        ?>
<br>
        <?php
            $hasil=1;
            if($hasil==1){
                echo($nama);
            }else if($hasil==2){
                echo($alamat);
            }else{
                echo($nohp);
            }
        ?>

        <?php
            $a=10;
            $b=20;

            function myTest(){
                global $a;
                global $b;    
                echo ($a)+($b);
            }
            myTest();
        ?>
<br>
        <?php
            global $a;
            global $b;
            $a="abc";
            $b="rahmattaisir";

            echo $GLOBALS["a"]="abc <br>";
            echo $GLOBALS["b"]="rahmattaisir";
        ?>
    </body>
</html>