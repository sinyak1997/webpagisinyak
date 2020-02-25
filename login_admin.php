<?php
    include'header.php';
?>

<!-- close style css -->
<style>
    *,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	margin: 0;
	font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
	background: #20bf6b;
}

.forms-section {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.section-title {
	font-size: 32px;
	letter-spacing: 1px;
	color: #eb3b5a;
}

.forms {
	display: flex;
	align-items: flex-start;
	margin-top: 30px;
}

.form-wrapper {
	animation: hideLayer .3s ease-out forwards;
}

.form-wrapper.is-active {
	animation: showLayer .3s ease-in forwards;
}

@keyframes showLayer {
	50% {
		z-index: 1;
	}
	100% {
		z-index: 1;
	}
}

@keyframes hideLayer {
	0% {
		z-index: 1;
	}
	49.999% {
		z-index: 1;
	}
}

.switcher {
	position: relative;
	cursor: pointer;
	display: block;
	margin-right: auto;
	margin-left: auto;
	padding: 0;
	text-transform: uppercase;
	font-family: inherit;
	font-size: 16px;
	letter-spacing: .5px;
	color: #999;
	background-color: transparent;
	border: none;
	outline: none;
	transform: translateX(0);
	transition: all .3s ease-out;
}

.form-wrapper.is-active .switcher-login {
	color: #fff;
	transform: translateX(90px);
}

.form-wrapper.is-active .switcher-signup {
	color: #fff;
	transform: translateX(-90px);
}

.underline {
	position: absolute;
	bottom: -5px;
	left: 0;
	overflow: hidden;
	pointer-events: none;
	width: 100%;
	height: 2px;
}

.underline::before {
	content: '';
	position: absolute;
	top: 0;
	left: inherit;
	display: block;
	width: inherit;
	height: inherit;
	background-color: currentColor;
	transition: transform .2s ease-out;
}

.switcher-login .underline::before {
	transform: translateX(101%);
}

.switcher-signup .underline::before {
	transform: translateX(-101%);
}

.form-wrapper.is-active .underline::before {
	transform: translateX(0);
}

.form {
	overflow: hidden;
	min-width: 260px;
	margin-top: 50px;
	padding: 30px 25px;
	border-radius: 5px;
	transform-origin: top;
}

.form-login {
	animation: hideLogin .3s ease-out forwards;
}

.form-wrapper.is-active .form-login {
	animation: showLogin .3s ease-in forwards;
}

@keyframes showLogin {
	0% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
}

@keyframes hideLogin {
	0% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
}

.form-signup {
	animation: hideSignup .3s ease-out forwards;
}

.form-wrapper.is-active .form-signup {
	animation: showSignup .3s ease-in forwards;
}

@keyframes showSignup {
	0% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
}

@keyframes hideSignup {
	0% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
}

.form fieldset {
	position: relative;
	opacity: 0;
	margin: 0;
	padding: 0;
	border: 0;
	transition: all .3s ease-out;
}

.form-login fieldset {
	transform: translateX(-50%);
}

.form-signup fieldset {
	transform: translateX(50%);
}

.form-wrapper.is-active fieldset {
	opacity: 1;
	transform: translateX(0);
	transition: opacity .4s ease-in, transform .35s ease-in;
}

.form legend {
	position: absolute;
	overflow: hidden;
	width: 1px;
	height: 1px;
	clip: rect(0 0 0 0);
}

.input-block {
	margin-bottom: 20px;
}

.input-block label {
	font-size: 14px;
	color: #a1b4b4;
}

.input-block input {
	display: block;
	width: 100%;
	margin-top: 8px;
	padding-right: 15px;
	padding-left: 15px;
	font-size: 16px;
	line-height: 40px;
	color: #3b4465;
	background: #eef9fe;
	border: 1px solid #cddbef;
	border-radius: 2px;
}

.form [type='submit'] {
	opacity: 0;
	display: block;
	min-width: 120px;
	margin: 30px auto 10px;
	font-size: 18px;
	line-height: 40px;
	border-radius: 25px;
	border: none;
	transition: all .3s ease-out;
}

.form-wrapper.is-active .form [type='submit'] {
	opacity: 1;
	transform: translateX(0);
	transition: all .4s ease-in;
}

.btn-login {
	color: #fbfdff;
	background: #a7e245;
	transform: translateX(-30%);
}

.btn-signup {
	color: #a7e245;
	background: #fbfdff;
	box-shadow: inset 0 0 0 2px #a7e245;
	transform: translateX(30%);
}
</style>
<!-- open style css -->

<!-- open html form bootstrap -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

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
    </form> -->
<!-- open html form bootstrap -->

<!-- open html form tampilan -->

    <section class="forms-section">
        <h1 class="section-title">Login Form</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
                Masuk
                <span class="underline"></span>
            </button>
            <form class="form form-login" action="proses/proses_login.php" method="POST">
                <fieldset>
                <legend>Masukkan username dan password anda</legend>
                <div class="input-block">
                    <label for="login-username">Username</label>
                    <input id="login-username" type="text" name="usrnm" required>
                </div>
                <div class="input-block">
                    <label for="login-password">Password</label>
                    <input id="login-password" type="password" name="pass" required>
                </div>
                </fieldset>
                <button type="submit" class="btn-login" name="input">Masuk</button>
            </form>
            </div>
            <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
                Daftar
                <span class="underline"></span>
            </button>
            <form class="form form-signup" action="proses/proses_registrasi.php" method="POST">
            <fieldset>
                <legend>Silakan, masukkan username kata sandi, dan konfirmasi kata sandi untuk mendaftar</legend>
                <div class="input-block">
                    <label for="signup-email">Email</label>
                    <input id="signup-email" type="email" name="email" required>
                </div>
                <div class="input-block">
                    <label for="signup-nama">Nama Lengkap</label>
                    <input id="signup-nama" type="text" name="nama" required>
                </div>
                <div class="input-block">
                    <label for="signup-username">Username</label>
                    <input id="signup-username" type="text" name="username" required>
                </div>
                <div class="input-block">
                    <label for="signup-password">Password</label>
                    <input id="signup-password" type="password" name="pass" required>
                </div>
                <div class="input-block">
                <label for="signup-level">Level</label>
                    <select name="level" id="signup-level">
                        <option value="Penjual">Penjual</option>
                        <option value="Pembeli">Pembeli</option>
                    </select>
                </div>
            </fieldset>
                <button type="submit" class="btn-signup" name="klik">Klik Men</button>
            </form>
            </div>
        </div>
    </section>

<!-- close html form tampilan -->

<!-- open javascript -->
    <script>
        const switchers = [...document.querySelectorAll('.switcher')]

    switchers.forEach(item => {
        item.addEventListener('click', function() {
            switchers.forEach(item => item.parentElement.classList.remove('is-active'))
            this.parentElement.classList.add('is-active')
        })
    })
    </script>
<!-- close javascript -->


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
    
    

