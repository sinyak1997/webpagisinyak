<?php
	include 'header.php';
?>

<?php
    include'koneksi/koneksi.php';

    $id=$_GET['id_mahasiswa'];
    $show=mysqli_query($koneksi, "SELECT * FROM nilai WHERE id_mahasiswa='$id'")or die (mysqli_error($show));

    if(mysqli_num_rows($show)==0){
        echo '
            <script>window.history.back()</script>
            ';
    }else{
        $data=mysqli_fetch_array($show);
    }
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
        <form class="form-horizontal" action="proses/proses_edit_nilai.php" method="GET">
        <input type="hidden" name="id_mhs" value="<?php echo $data['id_mahasiswa'] ?>">
			<div class="form-group">
				<label class="control-label col-sm-2">Nim:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="nim" placeholder="Masukkan Nim" value="<?php echo $data['nim_mahasiswa'] ?>">
                </div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Nama:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" value="<?php echo $data['nama_mahasiswa'] ?>">
                </div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-1">Jurusan:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="jurusan" placeholder="Masukkan Nama Anda" value="<?php echo $data['jurusan'] ?>">
                </div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-1">Mata Kuliah:</label>
				<div class="col-sm-10">
                    <input type="text" class="form-control" name="matakuliah" placeholder="Masukkan Nama Anda" value="<?php echo 
                    $data['mata_kuliah'] ?>">
                </div>
            </div>

            <!-- tabel untuk nilai -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    <!-- contennya -->
                    <label class="control-label col-sm-1">Harian:</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="harian" placeholder="Masukkan Nilai" value="<?php echo $data['harian'] ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                    <!-- contennya -->
                        <label class="control-label col-sm-1">Quiz:</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="quiz" placeholder="Masukkan Nilai" value="<?php echo $data['quiz'] ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                    <!-- contennya -->
                        <label class="control-label col-sm-1" >Uts:</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="uts" placeholder="Masukkan Nilai" value="<?php echo $data['uts'] ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                    <!-- contennya -->
                        <label class="control-label col-sm-1">Uas:</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="uas" placeholder="Masukkan Nilai" value="<?php echo $data['uas'] ?>">
                        </div>
                    </div>
                </div>
            </div>
            <br>   
            <!-- input submitnya -->
            <input type="submit" name="update" value="Update Men" class="btn btn-info">
        </form>		
    </div>
    <br>
    
    <?php
        include'footer.php';
    ?>