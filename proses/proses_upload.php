<?php
    if(isset($_POST['upload'])){
        $nama_file=$_FILES['photo']['name'];

        $format=explode(".", $nama_file);
        $fileExtension=end($format);
        $nama_sementara=$_FILES['photo']['tmp_name'];
        $md5file=md5($nama_file).".".$fileExtension;

        $lokasi_upload="../upload/";

        $fungsi_upload=move_uploaded_file($nama_sementara,
        $lokasi_upload.$md5file);

        if($fungsi_upload){
            echo "
            <script>alert('data berhasil diimput men',window.location.href='../upload.php');</script>
                ";
        }else{
            echo "
                    <script>alert('data gagal diimput bengak',window.location.href='../upload.php');</script>
                ";
        }

    }
?>
