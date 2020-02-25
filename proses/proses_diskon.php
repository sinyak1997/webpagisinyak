<!-- link bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
    include'../koneksi/koneksi.php';

    if (isset($_POST['jml_bayar'])){
        $id=md5(uniqid());
        $nama_barang=$_POST['nm_brg'];
        $harga_barang=$_POST['hrg_brg'];
        $stok_barang=$_POST['stk_brg'];
        $kategori_barang=$_POST['ktg_brg'];

        $input_diskon=mysqli_query($koneksi,"INSERT into stok VALUES('$id','$nama_barang',
        '$harga_barang','$stok_barang','$kategori_barang')")or die(mysqli_error($input_diskon));

        if($input_diskon){
            echo '
                <script>
                alert("data berhasil diimput",window.location.href="../diskon_bootstrap.php");
                </script>
                ';
        }
        else{
            echo "
                    <div class='alert alert-danger' role='alert'>
                        Data gagal diinput, mampus mu!
                    </div>
                ";
        }
    }
?>