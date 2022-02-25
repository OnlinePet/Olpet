<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://kit.fontawesome.com/e8881eebdf.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/list_artikel.css' ?>">
	<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/image/favicon.ico" />
	<title>Olpet - Artikel Kucing</title>
</head>

<body>

	<?php $this->load->view('templates/header_kucing'); ?>

	<div class="choose-container">
		<div class="garis1"></div>

		<div class="row-choose">
			<a href="<?= base_url('olpet/penyakitkucing') ?>" class="btn" style="text-decoration: none; color: unset;">penyakit</a>
			<a href="<?= base_url('olpet/reproduksikucing') ?>" class="btn" style="text-decoration: none; color: unset;">reproduksi</a>
			<a href="<?= base_url('olpet/nutrisikucing') ?>" class="btn" style="text-decoration: none; color: unset;">nutrisi</a>
			<a href="<?= base_url('olpet/vaksinkucing') ?>" class="btn" style="text-decoration: none; color: unset;">vaksin</a>
		</div>

		<div class="garis2"></div>
	</div>

	<div class="container_list_artikel">
		<div class="row">

			<?php foreach ($artikel as $a) : ?>

				<a href="<?= base_url('olpet/detail_article/' . $a->id); ?>" style="text-decoration: none; color: unset;">
					<div class="service">
						<i class="fas fa-cat"></i>
						<h2><?= $a->judul; ?></h2>
						<p><?= substr($a->isi, 0, 100) ?>...</p>
					</div>
				</a>

			<?php endforeach; ?>

		</div>

		<a href="<?= base_url('') ?>">
			<div class="close-container">
				<div class="leftright"></div>
				<div class="rightleft"></div>
				<label class="close">Kembali</label>
			</div>
		</a>

	</div>

</body>

</html>