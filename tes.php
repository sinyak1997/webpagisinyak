<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Input Nilai Mahasiswa</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.js"></script>
</head>
<body>

    <div class="container">
        <div class="row"></div>
            <div class="col-sm-12">
                <div class="page-header">
                    <h1 align="center">Program Input Nilai Mahasiswa</h1>
                </div>
        <form class="form-horizontal" action="" method="POST" >

            <!-- open nim -->
            <div class="form-group">
            <label for="nim" class="control-label col-sm-2">Nim</label>
                <div class="col-sm-7">
                    <input type="number" name="nim" class="form-control" placeholder="Masukkan Nim" required>
                </div> 
            </div>
            <!-- close nim -->

            <!-- open nama -->
            <div class="form-group">
            <label for="nama" class="control-label col-sm-2">Nama</label>
                <div class="col-sm-7">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" required >
                </div> 
            </div>
            <!-- close name -->

            <!-- open alamat -->
            <div class="form-group">
            <label for="kets" class="control-label col-sm-2">Alamat</label>
                <div class="col-sm-7">
                    <textarea  type="text" name="alamat" rows="6" class="form-control" placeholder="Masukkan Almat Anda" ></textarea>
                </div> 
            </div>
            <!-- close alamat  -->

            <!-- open JK -->
            <div class="form-group">
            <label for="jk" class="control-label col-sm-2">Jenis Kelamin</label>
                <div class="col-sm-2">
                    <select type="text" name="jk" class="form-control">
                        <option value="">Pilih Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div> 
            </div>
            <!-- close JK -->

            <!-- open jurusan -->
            <div class="form-group">
            <label for="rs" class="control-label col-sm-2">Jurusan</label>
                <div class="col-sm-7">
                    <input  type="text" name="jrs" id="jrs"  class="form-control" placeholder="Masukkan Jurusan ">
                </div> 
            </div>

            <!-- open mata kuliyah -->
            <div class="form-group">
            <label for="makul" class="control-label col-sm-2">Mata Kuliah</label>
                <div class="col-sm-7">
                    <input  type="text" name="mk" id="mk"  class="form-control" placeholder="Masukkan Mata Kuliah">
                </div> 
            </div>
            <!-- close mata kuliyah -->

            <!-- open kelas -->
            <div class="form-group">
            <label for="kelas" class="control-label col-sm-2">Kelas</label>
                <div class="col-sm-2">
                    <select type="text" name="kls" id="kls" class="form-control">
                        <option value="">Pilih Kelas</option>
                        <option value="A">Kelas A</option>
                        <option value="body">Kelas B</option>
                    </select>
                </div> 
            </div>
            <!-- close kelas -->

            <!-- open Nilai -->
            <div class="form-group">
            <label for="nil" class="control-label col-sm-2">Nilai</label>
                <div class="col-sm-7">
                    <input  type="text" name="nilai" id="nilai"  class="form-control" placeholder="Inputkan Nilai">
                </div> 
            </div>
            <!-- close Nilai -->
            <div class="form-group">
            <div class="col-sm-7">
            <button type="submit" name="tambah" class="btn btn-danger">Cek Men</button>
            </div> 
            </div>
        </div> 

</body>
</html> 