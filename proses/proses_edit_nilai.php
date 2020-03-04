<?php
    session_start();
    error_reporting(0);
?>

<?php
    include'../koneksi/koneksi.php';

    if (isset($_GET['update'])){
        $id_mahasiswa=$_GET['id_mhs'];
        $nim_mahasiswa=$_GET['nim'];
        $nama_mahasiswa=$_GET['nama'];
        $jurusan=$_GET['jurusan'];
        $mata_kuliah=$_GET['matakuliah'];
        $harian=$_GET['harian'];
        $quiz=$_GET['quiz'];
        $uts=$_GET['uts'];
        $uas=$_GET['uas'];
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

        $update_nilai=mysqli_query($koneksi,"UPDATE nilai SET nim_mahasiswa='$nim_mahasiswa',nama_mahasiswa='$nama_mahasiswa',jurusan='$jurusan',mata_kuliah='$mata_kuliah',harian='$harian',quiz='$quiz',uts='$uts',uas='$uas',nilai='$nilai',grade='$grade' WHERE id_mahasiswa='$id_mahasiswa'")or die(mysqli_error($update_nilai));

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