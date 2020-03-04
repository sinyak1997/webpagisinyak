<?php
    include 'header.php';
    
    session_start();
    error_reporting(0);
?>

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
            <div class="form-group">
				<label class="control-label col-sm-1">Mata Kuliah:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="matakuliah" placeholder="Masukkan Nama Anda">
                </div>
            </div>

            <!-- tabel untuk nilai -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
            <!-- contennya -->
                    <label class="control-label col-sm-1">Harian:</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="harian" placeholder="Masukkan Nilai">
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
include'koneksi/koneksi.php';


    $tampilkan_nilai=mysqli_query($koneksi,"SELECT * FROM nilai")or die(mysqli_error($tampilkan_nilai));

    while($data=mysqli_fetch_array($tampilkan_nilai)){

        if($data['nilai']<=50){
            echo "
                <div class='alert alert-danger' role='alert'>
                    Nilai ".$data['nama_mahasiswa']." Dengan Nim ".$data['nim_mahasiswa']." di Jurusan ".$data['jurusan']." Pada Mata Kuliah 
                    ".$data['mata_kuliah']." Mendapatkan Nilai ".$data['nilai']." Dengan Grade E 
                    <br>
                    <a href='edit_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>
                    <a href='proses/proses_hapus_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Delete</a>
                </div>
            ";
        }else if($data['nilai']<=65){
            echo "
                <div class='alert alert-danger' role='alert'>
                    Nilai ".$data['nama_mahasiswa']." Dengan Nim ".$data['nim_mahasiswa']." di Jurusan ".$data['jurusan']." Pada Mata Kuliah 
                    ".$data['mata_kuliah']." Mendapatkan Nilai ".$data['nilai']." Dengan Grade D 
                    <br>
                    <a href='edit_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>
                    <a href='proses/proses_hapus_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Delete</a>
                    
                </div>
            ";
        }else if($data['nilai']<=72){
            echo "
                <div class='alert alert-warning' role='alert'>
                Nilai ".$data['nama_mahasiswa']." Dengan Nim ".$data['nim_mahasiswa']." di Jurusan ".$data['jurusan']." Pada Mata Kuliah 
                ".$data['mata_kuliah']." Mendapatkan Nilai ".$data['nilai']." Dengan Grade C 
                <br>
                <a href='edit_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info' >Edit</a>
                <a href='proses/proses_hapus_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Delete</a>
                
                </div>
            ";
        }else if($data['nilai']<=83){
            echo "
                <div class='alert alert-primary' role='alert/'>
                    Nilai ".$data['nama_mahasiswa']." Dengan Nim ".$data['nim_mahasiswa']." di Jurusan ".$data['jurusan']." Pada Mata Kuliah 
                    ".$data['mata_kuliah']." Mendapatkan Nilai ".$data['nilai']." Dengan Grade B 
                    <br>
                    <a href='edit_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>
                    <a href='proses/proses_hapus_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Delete</a>
                </div>
            ";
        }else if($data['nilai']<=100 || $data['nilai']>=100){
            echo "
                <div class='alert alert-success' role='alert'>
                    Nilai ".$data['nama_mahasiswa']." Dengan Nim ".$data['nim_mahasiswa']." di Jurusan ".$data['jurusan']." Pada Mata Kuliah 
                    ".$data['mata_kuliah']." Mendapatkan Nilai ".$data['nilai']." Dengan Grade A 
                    <br>
                    <a href='edit_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-info'>Edit</a>
                    <a href='proses/proses_hapus_nilai.php?id_mahasiswa=".$data['id_mahasiswa']."' type='submit' class='btn btn-danger'>Delete</a>
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

<script>
    function hapus(){

        
swal({
    title: "Are you sure?",
    text: "Your will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
    },
    function(){
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
    });
}
</script>