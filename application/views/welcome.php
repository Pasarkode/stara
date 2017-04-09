<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Stara - Your Spiritual Journey Is Here | Stara.id</title>
	<meta name="description" content="Your Spiritual Journey Is Here">
	<link rel="stylesheet" type="text/css" href="<?php echo $lib; ?>style.css">
</head>
<body class="welcome">
<div class="changer">
<div class="ui welcome-bg fluid container">
	<div class="ui welcome-cont container">
		<div class="ui grid">
			<div class="four wide column">
				<a href="<?php echo base_url(); ?>" title=""><img src="<?php echo $lib; ?>stara_logo.png" alt=""></a>
			</div>
			<div class="twelve wide column">
				<div class="ui fluid icon input welcomesd">
					<input placeholder="Cari pertanyaan iman mu disini" type="text" style="color:white;background-color:#6A1849;border-radius:20px;">
					<i style="color:white;font-size:22px;" class="search icon"></i>
				</div>
			</div>
		</div>
		<div class="ui grid" style="">
			<div class="ten wide column">
				<h1 class="welcome-top-word">Your <b>Spiritual</b> <a style="color:#970071;"><b>Journey</b> is here</a></h1>
				<h2 class="welcome-af-top-word">Tanyakan apa yang belum pernah kamu tanyakan</h2>
				<br><br>
				<div class="ui f-log grid">
					<div class="nine wide column">
						<button class="ui fluid google plus welcome-gp-log-btn button">
						  <img src="<?php echo $lib; ?>google_plus.png" style="float:left;margin-left:5px;margin-right:-25px;">
						  Hubungkan Dengan Google+
						</button><br>
						<button class="ui fluid facebook welcome-fb-log-btn button">
						  <img src="<?php echo $lib; ?>facebook.png" style="float:left;margin-left:15px;widht:50px;">
						   &nbsp;Hubungkan Dengan Facebook
						</button><br>
						<b class="to-f-reg">Daftar Dengan Email</b><br><br>
						<p style="color:#8B026C;">Dengan melakukan registrasi berarti kamu sudah menyestujui peraturan yang berlaku disini</p>
					</div>
					<div class="seven wide column">
						<?=form_open('log', ['class'=>'ui welcome-login form'])?>
							<b style="color:white;">Login</b><br><br>
							<div class="field" style="margin-top:-12px;">
								<input placeholder="Email" name="identity" class="log-input" type="text">
							</div>

							<div class="ui checkbox" style="margin-left:20px;margin-bottom:15px;">
							  <input class="hidden" tabindex="0" name="example" type="checkbox">
							  <label style="color:white;">Ingat Saya</label>
							</div>

							<div class="field">
								<input placeholder="Password" name="password" class="log-input" type="password">
							</div>
							<b style="color:white;">Lupa Password ?</b>
							<button class="ui mini blue right floated button">
							  Login
							</button>
						<?php echo form_close(); ?>
					</div>
				</div>
				<div class="f-reg" style="display:none;">

						<?=form_open('home/do_signup', ['class'=>'ui welcome-register form'])?>
							<div class="fields" style="margin-top:-12px;">
								<div class="five wide required field">
									<label w>Nama Depan</label>
									<div class="ui left icon input">
										<input placeholder="Nama Depan" name="first_name" class="log-input" type="text">
										<i class="user pink icon"></i>
									</div>
								</div>
								<div class="five wide field">
									<label w>Nama Belakang</label>
									<div class="ui left icon input">
										<input placeholder="Nama Belakang" name="last_name" class="log-input" type="text">
										<i class="user pink icon"></i>
									</div>
								</div>
								<div class="six wide required field">
									<label w>Nama Pengguna</label>
									<div class="ui left icon input">
										<input placeholder="Nama Pengguna" name="username" class="log-input" type="text">
										<i class="street view pink icon"></i>
									</div>
								</div>
							</div>
							<div class="fields">
								<div class="five wide required field">
									<label w>Tanggal Lahir</label>
									<div class="ui left icon input">
										<input placeholder="Tanggal Lahir" name="borndate" class="log-input" type="text">
										<i class="calendar pink icon"></i>
									</div>
								</div>
								<div class="five wide required field">
									<label w>Jenis Kelamin</label>
									<div tabindex="0" class="ui log-input selection dropdown" title="Tentukan Jenis Kelamin Anda">
									  <input name="gender" type="hidden">
									  <i class="dropdown icon"></i>
									  <div class="default text">Jenis Kelamin</div>
									  <div tabindex="-1" class="menu transition hidden">
									    <div style="" class="item" data-value="1"><i class="male icon"></i> Pria</div>
									    <div class="item" data-value="0"><i class="female icon"></i> Wanita</div>
									  </div>
									</div>
								</div>
								<div class="six wide required field">
									<label w>Alamat Surel</label>
									<div class="ui left icon input">
										<input placeholder="Alamat Surel" name="email" class="log-input" type="text">
										<i class="mail outline pink icon"></i>
									</div>
								</div>
							</div>
							<div class="fields">
								<div class="eight wide required field">
									<label w>Kata Sandi</label>
									<div class="ui left icon input">
										<input name="password" placeholder="Kata Sandi" class="log-input" type="text">
										<i class="unlock alternate pink icon"></i>
									</div>
								</div>
								<div class="eight wide required field">
									<label w>Ulangi Kata Sandi</label>
									<div class="ui left icon input">
										<input name="password_confirm" placeholder="Ulangi Kata Sandi" class="log-input" type="text">
										<i class="lock pink icon"></i>
									</div>
								</div>
							</div>
							<div class="ui to-f-log button" style="border-radius:25px;">Kembali</div>
							<button type="submit" class="ui blue button" style="border-radius:25px;">Daftar</button>
							<b style="">&nbsp;</b>
							<div class="ui checkbox" style="margin-left:20px;margin-bottom:15px;">
							  <input class="hidden" tabindex="0" name="example" type="checkbox">
							  <label style="color:white;">Dapatkan Pemberitahuan Terbaru Melalui Email</label>
							</div>
						<?php echo form_close(); ?>
				</div>
				<div class="welcome-footer-link">
					<a href="" title="About">About</a>
					<a href="" title="Privacy">Privacy</a>
					<a href="" title="Terms">Terms</a>
					<a href="" title="Contact">Contact</a>
				</div>
			</div>
			<div class="six wide glowie-angle column" abg-now="0">
			</div>
			<img src="lib/background_twinkle.png" alt="" class="bg1">
			<img src="lib/star2.png" alt="" class="bg2">
			<img src="lib/star3.png" alt="" class="bg3">
			<div class="m-bg"></div>
			<img src="lib/angel_full.png" style="position:fixed;top:40%;z-index:5;" statue>
		</div>

	</div>
</div>
</div>
	<script type="text/javascript">var base_url = '<?php echo base_url(); ?>';</script>
	<script src="<?php echo $lib; ?>bundle.js"></script>
</body>
</html>