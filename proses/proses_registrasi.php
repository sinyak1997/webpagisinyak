<?php
    session_start();
    error_reporting(0);
?>

<?php
    include'../koneksi/koneksi.php';


    if (isset($_POST['klik'])){
        $id=md5(uniqid());
        $username=($_POST['username']);
        $password=md5($_POST['pass']);
        $email=($_POST['email']);
        $nama_lengkap=($_POST['nama']);
        $level=($_POST['level']);

        $input_query=mysqli_query($koneksi,"INSERT into user VALUES('$id','$nama_lengkap',
        '$username','$password','$email','$level')")or die
        (mysqli_error($input_query));

        // die($input_query);
        if($input_query){
            echo "
                    <script>alert('Data Berhasil di input dan silahkan login cui')
                        window.location.href='../login_admin.php'
                    </script>
                ";
        }else {
            echo"login gagal";
        }

    }
?>

