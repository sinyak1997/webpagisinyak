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

            if($nilai<=50){
                $grade='E';
            }else if($nilai<=65){
                $grade='D';
            }else if($nilai<=72){
                $grade='C';
            }else if($nilai<=83){
                $grade='B';
            }else if($nilai<=100 || $nilai>=100){
                $grade='A';
            }

        $update_nilai=mysqli_query($koneksi,"UPDATE nilai SET nim=$nim_mahasiswa',nama='$nama_mahasiswa',jurusan='$jurusan',harian='$harian',quiz='$quiz',uts='$uts',uas='$uas',nilai='$nilai',grade='$grade')")or die(mysqli_error($update_nilai));

        if($update_nilai){
            echo'
                <script>
                alert("data berhasil diimput",window.location.href="../nilai_bootstrap.php");
                </script>
                ';
        }else{
            echo'
            <script>
                alert("data gagal diimput",window.location.href="../edit_nilai.php");
                </script>
            ';
        }

    }
?>