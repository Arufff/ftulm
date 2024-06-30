<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register to Layanan FT ULM</title>
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
				<form method="post" action="<?= base_url('register/create') ?>" class="login100-form validate-form">
					<center><img src="<?= base_url() ?>assets/login/images/ftlogin.png"></center><br>
					<span class="login100-form-title p-b-10"><b>Register Akun Anda!</b></span><br>

					<input type="hidden" name="prodi" value="Teknologi Informasi">

					<div class="wrap-input100">
						<input class="input100" type="number" id="nim" name="nim" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Masukkan NIM</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" id="nama" name="nama" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Masukkan Nama</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="number" id="nohp" name="nohp" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Masukkan Nomor Seluler</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" id="password" name="password" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Masukkan Password</span>
					</div>
						
					<div class="container-login100-form-btn mt-5 mb-5">
						<button class="btn btn-primary btn-lg btn-block">Register</button>
					</div>

					<div><center>
						<span class="login50-form-title">Sudah Punya Akun? <a href="<?= base_url('welcome') ?>"><b>Login!</a></b></span>
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