<?php
    include '../koneksi/koneksi.php';


    if(isset($_POST['cekmen'])){
        $id=uniqid();
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $jenis_kelamin=$_POST['jk'];
        $alamat=$_POST['alamat'];
        $tanggal=$_POST['tgl'];
        $tempat_lahir=$_POST['tl'];
        $no_hp=$_POST['np'];
        $hobi1=$_POST['hobi1'];
        $hobi2=$_POST['hobi2'];
        $hobi3=$_POST['hobi3'];
        $hobi=($hobi1.','.$hobi2.','.$hobi3);

        $nama_file=$_FILES['photo']['name'];

        $format=explode(".",$nama_file);
        $fileEktension=end($format);
        $nama_sementara=$_FILES['photo']['tmp_name'];
        $md5file=md5($nama_file).".".$fileEktension;

        $lokasi_upload="../upload/";

        $fungsi_upload=move_uploaded_file($nama_sementara,$lokasi_upload.$md5file);

        $query=mysqli_query($koneksi, "INSERT INTO form_biodata VALUES('$id','$nama','$email','$jenis_kelamin','$alamat','$tanggal','$tempat_lahir','$no_hp','$hobi','$md5file')")or die(mysqli_error($query));

        if ($query){
            echo "
                <script>alert('Data Berhasil Diimput',window.location.href='../biodata.php')</script>
            ";
        }else{
            echo "
                <script>alert('Data Gagal Diimput',window.location.href='../biodata.php')</script>
            ";
        }
    }
?>