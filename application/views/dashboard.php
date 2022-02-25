<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://kit.fontawesome.com/e8881eebdf.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/dashboard.css' ?>">
	<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/image/favicon.ico" />
	<title>Olpet - Halaman Utama</title>
</head>

<body>

	<?php $this->load->view('templates/header_kucing_1'); ?>

	<table style="margin-right: auto; margin-left: auto; padding-top: 10px; padding-bottom: 10px;">
		<tr>
			<td>
				<img src="<?php echo base_url() . 'assets/image/logo3.png' ?>" style="width: 150px; height: auto;">
			</td>
		</tr>
	</table>

	<div class="container_index">
		<div class="row">
			<a href="<?= base_url('olpet/artikel_kucing'); ?>" style="text-decoration: none; color: unset;">
				<div class="service">
					<i class="fas fa-cat"></i>
					<h2>Artikel Kucing</h2>
					<br><br>
					<p>Kumpulan Artikel-Artikel Mengenai Kucing</p>
				</div>
			</a>

			<a href="<?= base_url('olpet/artikel_anjing'); ?>" style="text-decoration: none; color: unset;">
				<div class="service">
					<i class="fas fa-dog"></i>
					<h2>Artikel Anjing</h2>
					<br><br>
					<p>Kumpulan Artikel-Artikel Mengenai Anjing.</p>
				</div>
			</a>

			<a href="<?= base_url('olpet/pencatatan'); ?>" style="text-decoration: none; color: unset;">
				<div class="service">
					<i class="fas fa-notes-medical"></i>
					<h2>Pencatatan Rekam Medis Hewan</h2>
					<p>Sayangi Hewan Peliharaan Anda Dengan Melakukan Pencatatan Rekam Medis.</p>
				</div>
			</a>

			<a href="<?= base_url('olpet/rating'); ?>" style="text-decoration: none; color: unset;">
				<div class="service">
					<i class="fas fa-grin-stars"></i>
					<h2>Review</h2>
					<br><br>
					<p>Berikan Masukan Anda Mengenai Aplikasi kamu.</p>
				</div>
			</a>

		</div>
	</div>

</body>

</html>