<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<link rel="shortcut icon" href="https://cepatpilih.com/image/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body style="background: url(img/bg.jpg); background-size: cover;">

	<div class="container">
	<div class="card" style="padding: 50px; width: 40%; margin: 0 auto; margin-top: 10%;">
	<h3 style="text-align: center;" class="orange-text">Daftar!</h3>
	<form method="POST" action="">
		<div class="input_field">
			<label for="username">NIK</label>
			<input id="nik" type="text" name="nik" required>
		</div>
		<div class="input_field">
			<label for="username">Username</label>
			<input id="Username" type="text" name="username" required>
		</div>
		<div class="input_field">
			<label for="username">Nama Panjang</label>
			<input id="nama_panjang" type="text" name="nama_panjang" required>
		</div>
		<div class="input_field">
			<label for="username">Password</label>
			<input id="Password" type="password" name="password" required>
		</div>
		<div class="input_field">
			<label for="username">Nomor telp</label>
			<input id="nomor_telp" type="text" name="nomor_telp" required>
		</div>
		<input type="submit" name="Daftar" value="Daftar" class="btn orange" style="width: 100%;">
	</form>
	</div>
	</div>
	</body>
	</html>
						<?php 
				include 'conn/koneksi.php';
				if(isset($_POST['Daftar'])){
					$password = md5($_POST['password']);

					$query=mysqli_query($koneksi,"INSERT INTO masyarakat VALUES ('".$_POST['nik']."','".$_POST['nama_panjang']."','".$_POST['username']."','".$password."','".$_POST['nomor_telp']."')");
					if($query){
						echo "<script>alert('Pendaftaran berhasil silakan login')</script>";
						echo "<script>location='index.php'</script>";
					}
				}
			 ?>