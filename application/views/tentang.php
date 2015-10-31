<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web Fikom</title>
		<link href= "<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header">
			<div id="header_wrapper">
					<div id="link_wrapper">
						<a href="<?php echo base_url();?>index.php/welcome">Home </a>
						<a class="active" href="<?php echo base_url();?>index.php/welcome/tentang">Tentang </a>
						<a href="<?php echo base_url();?>index.php/welcome/berita">Berita </a>
						<a href="#">Kontak</a>
					</div>
				</div>
		</div>
		<div id="slide">
			<center>
					<img src="<?php echo base_url();?>asset/img/header-img.jpg">
			</center>
		</div>
		<div id="article">
			<div id="welcome">
				<h1>
					Selamat Datang di Website Fakultas Ilmu Komunikasi Gunadarma...
				</h1>
				<p>
					Blablablabla blablabla 		Blablablabla blablabla Blablablabla blablabla Blablablabla blablabla
				</p>
			</div>
				<h1>Tentang saya </h1>
				<?php echo $content;?>
				
		</div>
		<div id="footer">
			<div class="foot-text">
				copyright @2014 GUCC
			</div>
		</div>
	</body>
</html>