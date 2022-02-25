<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/e8881eebdf.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/detail_artikel.css' ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/image/favicon.ico" />
    <title>Olpet - Detail Artikel</title>
</head>

<body>

    <?php $this->load->view('templates/header_kucing_anjing'); ?>

    <table style="margin-right: auto; margin-left: auto; padding-top: 10px; padding-bottom: 10px; margin-bottom: -18px;">
        <tr>
            <td>
                <img src="<?php echo base_url() . 'assets/image/logo3.png' ?>" style="width: 150px; height: auto;">
            </td>
        </tr>
    </table>

    <div class="container">
        <div class="main-content">
            <?php foreach ($artikel as $a) : ?>
                <h4><?= $a->judul; ?></h4>
                <h5>oleh <?= $a->penulis; ?>, pada <?= date('d F Y', $a->tanggal); ?></h5>
                <hr>
                <div class="article">
                    <p><?= $a->isi; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="right-sidebar">
            <div class="title">
                <h6 style="font-size: 2.5vw; margin-bottom: 20px;"><u>Rekomendasi</u></h6>
            </div>
            <?php
            $queryArtikel = "SELECT * FROM `article`";
            $astikelquery = $this->db->query($queryArtikel)->result();
            ?>
            <?php foreach ($astikelquery as $aq) : ?>
                <div class="event">
                    <div class="left">
                        <i class="fa-solid fa-paw fa-2xl"></i>
                    </div>
                    <div class="right">
                        <h6><?= $aq->judul ?></h6>
                        <p><?= $aq->jenis_artikel ?></p>
                        <a href="<?= base_url('olpet/detail_article/' . $aq->id); ?>">more..</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <br>
    </div>


</body>

</html>