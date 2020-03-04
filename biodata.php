<?php
    include'header.php';
?>
<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="proses/proses_biodata.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="col-md-5">
                    <label for="">Nama  :</label>
                    <input id="" type="text" name="nama" class="form-control" placeholder="">
                </div>
                <div class="col-md-5">
                    <label for="">Email :</label>
                    <input id="" type="text" name="email" class="form-control" placeholder="">
                </div>
                <div class="col-md-5">
                    <label for=" class="form-control">Jenis Kelamin :</label><br>
                    <input id="" type="radio" name="jk" value="Laki-laki">LakiLaki
                    <input id="" type="radio" name="jk" value="Perempuan">Perempuan 
                </div>
                <div class="col-md-5">
                    <label for="">Alamat  :</label>
                    <textarea id="" name="alamat" class="form-control" placeholder=""></textarea>
                </div>
                <div class="col-md-5">
                    <label for="">Tanggal   :</label>
                    <input id="" type="date" name="tgl" class="form-control" placeholder="">
                </div>
                <div class="col-md-5">
                    <label for="">Tempat Lahir  :</label>
                    <input id="" type="text" name="tl" class="form-control" placeholder="">
                </div>
                <div class="col-md-5">
                    <label for="">No Hp :</label>
                    <input id="" type="number" name="np" class="form-control" placeholder=""><br>
                </div>
                <div class="col-md-5">
                    <label>Hobi :</label><br>
                    <input id="" type="checkbox" name="hobi1" value="meukawe">Meukawe 
                    <input id="" type="checkbox" name="hobi2" value="kem">Kem 
                    <input id="" type="checkbox" name="hobi3" value="poeh_gop">Poeh Gop <br>
                </div><br>
                <div class="col-md-5">
                    <label for="">Photo  :</label>
                    <input id="" type="file" name="photo" class="form-control" placeholder=""><br>
                </div>
                    <input type="submit" name="cekmen" value="Gaspul cui"><br>
                
            </div>
        </form>
    </div>


<?php
    include 'footer.php';
    ?>    
</body>
</html>