<!-- link bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
    include'../koneksi/koneksi.php';

    if (isset($_POST['gaspul'])){
        $id_mahasiswa=md5(uniqid());
        $nim_mahasiswa=$_POST['nim'];
        $nama_mahasiswa=$_POST['nama'];
        $jurusan=$_POST['jurusan'];
        $harian=$_POST['harian'];
        $quiz=$_POST['quiz'];
        $uts=$_POST['uts'];
        $uas=$_POST['uas'];
        $nilai=($harian*0.1)+($quiz*0.15)+($uts*0.35)+($uas*0.4);
        

        $input_nilai=mysqli_query($koneksi,"INSERT into nilai VALUES('$id_mahasiswa','$nim_mahasiswa',
        '$nama_mahasiswa','$jurusan','$harian','$quiz','$uts','$uas','$nilai')")or die(mysqli_error($input_nilai));

        if($input_nilai){
            echo '
                <script>
                alert("data berhasil diimput",window.location.href="../nilai_bootstrap.php");
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