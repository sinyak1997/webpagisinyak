<?php
    include'header.php';
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

    <form action="proses/proses_login.php" method="POST">
        <div class="container">
                <div class="form-group">
                    <label for="exampleInputEmail1">username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="usrnm" placeholder="Masukkan username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Msukkan password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                </div>
                    <button type="submit" class="btn btn-primary" name="input">Submit</button>
        </div>
    </form>

    <?php
        // if (isset($_POST['input'])){
        //         $username=$_POST['usrnm'];
        //         $password=$_POST['pass'];

        //     if ($username=="admin"&&$password=="admin123"){
        //         echo "<script>
        //                     alert(window.location.href='diskon_bootstrap.php');
        //                 </script>";
        //     }else if($username=="siswa"&&$password=="siswa123"){
        //         echo "  <script>
        //                     alert(window.locatin.href='nilai_bootstrap.php');
        //                 </script>";
        //     }else{
        //         echo "  <div class='alert alert-danger'role='alert'>
        //                     Login gagal, username dan password salah!
        //                 </div>";
        //     }
        // }
            
    ?>
    <br>

<?php
    include'footer.php';
?>
    
