<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e8881eebdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/header_anjing_2.css' ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/image/favicon.ico" />
</head>

<body>

    <div class="container_header">
        <nav>
            <img src="<?php echo base_url() . 'assets/image/logo2.png' ?>" class="logo">
            <ul>
                <li><a href="<?= base_url('') ?>">home</a></li>
                <li><a href="<?= base_url('olpet/about_us'); ?>">about us</a></li>
                <!-- <li><a href="#">Our Service</a></li>
				<li><a href="#">Page</a></li> -->
            </ul>
            <div class="search-box">
                <a href="<?= base_url('olpet/cari') ?>"><i class="fas fa-search"></i></a>
                <input type="text" name="keyword" id="keyword" placeholder="Search" class="form-control">
            </div>
            <a href="<?= base_url('auth') ?>" class="user"><i class="far fa-user-circle" style="font-size: 35px; color: #ffffff;"></i></a>
        </nav>
        <h1 class="sen1">full fill your</h1>
        <h1 class="sen2">pet need</h1>
        <h3>penuhi kebutuhan hewan kesayangan <br> kalian dirumah</h3>
    </div>

</body>

</html>