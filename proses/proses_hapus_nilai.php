

<?php
    include'../koneksi/koneksi.php';

    if(isset($_GET['id_mahasiswa'])){
        $id_mahasiswa=$_GET['id_mahasiswa'];
        $delete_nilai=mysqli_query($koneksi, "DELETE FROM nilai WHERE id_mahasiswa='$id_mahasiswa'")or die(mysqli_error($delete_nilai));

        if($delete_nilai){ ?>
    <script>
        alert("data berhasil diimput",window.location.href="../nilai_bootstrap.php");
    </script>
    <?php   }else{?>
    <script>
        alert('data berhasil dihapus men');
    </script>
    <?php   }
    } ?>
        
    
    