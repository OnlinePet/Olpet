<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/e8881eebdf.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/aboutus.css' ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/image/favicon.ico" />
    <title>Olpet - Halaman Utama</title>
</head>

<body>

    <?php $this->load->view('templates/header_kucing_2'); ?>

    <table style="margin-right: auto; margin-left: auto; margin-bottom: -30px;padding-top: 10px; padding-bottom: 10px;">
        <tr>
            <td>
                <img src="<?php echo base_url() . 'assets/image/logo3.png' ?>" style="width: 150px; height: auto;">
            </td>
        </tr>
    </table>

    <div class="wrapper">
        <div class="product-img">
            <img src="<?php echo base_url() . 'assets/image/logo1.png' ?>" height="420" width="420">
        </div>
        <div class="product-info">
            <div class="product-text">
                <h1>Olpet</h1>
                <h2>by team and crew</h2>
                <p>Website Penyedia Artikel Yang Memiliki Tujuan Membantu Pemilik Hewan <br> Peliharaan Kucing dan Anjing Dalam Menyelesaikan Permasalahan Yang Ada. </p>
            </div>
            <div class="product-price-btn">
                <a href="<?php echo base_url('') ?>" style="text-decoration: none; color: unset;"><button type="button">Jelajahi Sekarang!</button></a>
            </div>
        </div>
    </div>

</body>

</html>