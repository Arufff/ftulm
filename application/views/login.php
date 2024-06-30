<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login to Layanan FT ULM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action="<?= base_url('welcome/auth') ?>" class="login100-form validate-form">
					<center><img src="<?= base_url() ?>assets/login/images/ftlogin.png"></center><br><br>
					<span class="login100-form-title p-b-10"><b>Login ke Akun Anda!</b></span>
					<center><span class="login25-form-title">Masukkan username dan password untuk login!</span></center><br><br>
                    <?= $this->session->flashdata('pesan') ?>

					<div class="wrap-input100 validate-input" data-validate = "Username yang dimasukkan salah!">
						<input class="input100" type="text" id="nim" name="nim">
						<span class="focus-input100"></span>
						<span class="label-input100">Masukkan Username</span>
					</div>
											
					<div class="wrap-input100 validate-input" data-validate="Password yang dimasukkan salah!">
						<input class="input100" type="password" id="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Masukkan Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3">
						<div></div>
						<div><a href="#"><span class="login50-form-title">Lupa Password?</span></a></div>
					</div>			
						
					<div class="container-login100-form-btn mt-5 mb-5">
						<button class="btn btn-primary btn-lg btn-block">Login</button>
					</div>

					<div><center>
						<span class="login50-form-title">Belum Mempunyai Akun? <a href="<?= base_url('register') ?>"><b>Daftar!</a></b></span>
					</center></div>		
				</form>

				<div class="login100-more" style="background-image: url('<?= base_url() ?>assets/login/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/login/js/main.js"></script>
<!--===============================================================================================-->

</body>
</html>