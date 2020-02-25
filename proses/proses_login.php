<?php
include'../koneksi/koneksi.php';

    if (isset($_POST['input'])){
            $username=md5($_POST['usrnm']);
            $password=md5($_POST['pass']);

            // query
            $login=mysqli_query($koneksi,"select * from user where user_name='$username' and  password='$password'");
            // pengecekan
            $cek=mysqli_num_rows($login);
            // menampilkan defenisi data
            $data=mysqli_fetch_assoc($login);

            if($cek>0){
                // Bagian Penjual
                if($data['level']=="Penjual"){
                    $_SESSION['user_name']=$data['user_name'];
                    $_SESSION['level']=$data['level'];
                    $_SESSION['status']='login';

                    echo"<script>
                            alert(window.location.href='../diskon_bootstrap.php');
                        </script>";
                // Bagian Pembeli
                }else if ($data['level']=="Pembeli"){
                    $_SESSION['user_name']=$data['user_name'];
                    $_SESSION['level']=$data['level'];
                    $_SESSION['status']='login';

                    echo"<script>
                            alert(window.location.href='../nilai_bootstrap.php');
                        </script>";
                }else{
                echo "<div class='alert alert-danger'role='alert'>
                        Gagal
                    </div>";
                }
            }

    //     if ($username=="admin"&&$password=="admin123"){
    //         echo "<script>
    //                     alert(window.location.href='diskon_bootstrap.php');
    //                 </script>";
    //     }else if($username=="siswa"&&$password=="siswa123"){
    //         echo "  <script>
    //                     alert(window.locatin.href='nilai_bootstrap.php');
    //                 </script>";
    //     }else{
    //         echo "  <div class='alert alert-danger' role='alert'>
    //                     Login gagal, username dan password salah!
    //                 </div>";
    //     }
        }
        ?>