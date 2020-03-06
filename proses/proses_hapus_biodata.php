<?php
    include'../koneksi/koneksi.php';

    if(isset($_GET['id_biodata'])){

        $id=$_GET['id_biodata'];
        $hapus=mysqli_query($koneksi, "DELETE FROM form_biodata WHERE id_biodata='$id'")or die (mysqli_error($hapus));

        if($hapus){ ?>
        
        <script>alert('Data Berhasil Dihapus',window.location.href='../tabel_biodata.php')</script>
    <?php }else{?>
        <script>alert('Data Gagal Dihapus',window.location.href='../tabel_biodata.php')</script>

<?php   }
} ?>