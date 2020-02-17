<html>
<head>
    <title>Bootstrap Part 13 : Membuat Form dengan Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
</head>
<body>

	<div class="jumbotron">
		<h1 class="display-4">Cek Harga Diskon</h1>
		<p class="lead"><div class="container">		
		<h1>Membuat Form dengan Bootstrap Diskon Harga</h1> <hr>
		<form class="form-horizontal" action="" method="POST">
		<div class="form-group">
				<label class="control-label col-sm-2" >Nama Barang:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nm_brg" placeholder="Masukkan Nama Barang">
				</div>
			<div class="form-group">
				<label class="control-label col-sm-2" >Harga Barang:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="hrg_brg" placeholder="Masukkan jumlah harga">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" >Diskon:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="diskon" placeholder="Masukkan jumlah harga">
				</div>
			</div>		
			
			<input type="submit" name="jml_bayar" value="Cek Men" class="btn btn-danger">
			
		</form>		
	</div></p>
		<hr class="my-4">
		<p>
			<?php
				if (isset($_POST['jml_bayar'])){
					$nama_barang=$_POST ['nm_brg'];
					$harga_barang=$_POST ['hrg_brg'];
					$diskon=$_POST ['diskon'];
					$syarat=400000;
					$beli=$harga_barang-($harga_barang*$diskon/100);

					if ($harga_barang>=$syarat){
						echo "
							<div class='alert alert-info' role='alert'>
							Anda telah membeli $nama_barang dan mendapatkan potongan harga $diskon %, total yang dibayar $beli
							</div>
						";
					}else {
						echo "Anda miskin";
					}
				}
			?>
		</p>
	</div>
</body>
</html> 