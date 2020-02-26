<?php
	include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
</head>
<body>
    <div class="container">		
		<center><h1>PENILAIAN MAHASISWA PBA UIN AR-RANIRY</h1> <hr></center>
		<form class="form-horizontal" action="proses/proses_nilai.php" method="POST">
			<div class="form-group">
				<label class="control-label col-sm-2">Nim:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="nim" placeholder="Masukkan Nim">
                </div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Nama:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda">
			    </div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-1">Jurusan:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="jurusan" placeholder="Masukkan Nama Anda">
			    </div>
            </div>

            <!-- tabel untuk nilai -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
            <!-- contennya -->
                    <label class="control-label col-sm-1">Harian:</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="harian" placeholder="Masukkan Nilainumber">
                        </div>
                    </div>
            <div class="col-md-3">
            <!-- contennya -->
            <label class="control-label col-sm-1">Quiz:</label>
                <div class="col-sm-10">
                        <input type="number" class="form-control" name="quiz" placeholder="Masukkan Nilai">
                </div>
            </div>
            <div class="col-md-3">
            <!-- contennya -->
            <label class="control-label col-sm-1" >Uts:</label>
                <div class="col-sm-10">
                        <input type="number" class="form-control" name="uts" placeholder="Masukkan Nilai">
                </div>
            </div>
            <div class="col-md-3">
            <!-- contennya -->
            <label class="control-label col-sm-1">Uas:</label>
                <div class="col-sm-10">
                        <input type="number" class="form-control" name="uas" placeholder="Masukkan Nilai">
                </div>
                </div>
                </div>
        </div>
        <br>   
            <!-- input submitnya -->
            <input type="submit" name="gaspul" value="Cek Men" class="btn btn-warning">
        </form>		
	</div>
        <br>
        <br>    

            <!-- php -->
    <?php
        if (isset($_POST['tambah'])){
            $nim=$_POST ['nim'];
            $nama=$_POST ['nama'];
            $jurusan=$_POST ['jurusan'];
            $harian=$_POST ['harian'];
            $quiz=$_POST ['quiz'];
            $uts=$_POST ['uts'];
            $uas=$_POST ['uas'];
            $nilai=($harian*0.1)+($quiz*0.15)+($uts*0.35)+($uas*0.4);

            if ($nilai<=50){
                echo "
                    <div class='alert alert-danger' role='alert'>
                        Nilai ".$data['nama_mahasiswa']." dengan ".$data['nim_mahasiswa']." di ".$data['jurusan']." nilai yang akan tertera 
                        ".$data['nilai']." adalah E <br>
                    </div>
                ";
            }else if ($nilai<=65){
                echo "
                    <div class='alert alert-danger' role='alert'>
                        Nilai ".$data['nama_mahasiswa']." dengan ".$data['nim_mahasiswa']." di ".$data['jurusan']." nilai yang akan tertera ".$data['nilai']." adalah D <br>
                    </div>
                ";
            }else if ($nilai<=72){
                echo "
                    <div class='alert alert-warning' role='alert'>
                    Nilai ".$data['nama_mahasiswa']." dengan ".$data['nim_mahasiswa']." di ".$data['jurusan']." nilai yang akan tertera ".$data['nilai']." adalah C <br>
                    </div>
                ";
            }else if ($nilai<=83){
                echo "
                    <div class='alert alert-success' role='alert'>
                        Nilai ".$data['nama_mahasiswa']." dengan ".$data['nim_mahasiswa']." di ".$data['jurusan']." nilai yang akan tertera ".$data['nilai']." adalah B <br>
                    </div>
                ";
            }else if ($nilai<=100 || $nilai>=100){
                echo "
                    <div class='alert alert-success' role='alert'>
                        Nilai ".$data['nama_mahasiswa']." dengan ".$data['nim_mahasiswa']." di ".$data['jurusan']." nilai yang akan tertera ".$data['nilai']." adalah A <br>
                    </div>
                ";
            }
        }    
    ?>
			
		

    
</body>
</html>

<?php
    include'footer.php';
?>
