<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/e8881eebdf.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/pencarian_artikel.css' ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/image/favicon.ico" />
    <title>Olpet - Pencarian Artikel</title>
</head>

<body>

    <?php $this->load->view('templates/header_anjing_1'); ?>

    <table style="margin-right: auto; margin-left: auto; padding-top: 10px; padding-bottom: 10px;">
        <tr>
            <td>
                <img src="<?php echo base_url() . 'assets/image/logo3.png' ?>" style="width: 150px; height: auto;">
            </td>
        </tr>
    </table>

    <div class="container_list_artikel">
        <div class="row">

            <?php foreach ($artikel as $a) : ?>

                <a href="<?= base_url('olpet/detail_article/' . $a->id); ?>" style="text-decoration: none; color: unset;">
                    <div class="service">
                        <i class="fa-solid fa-paw"></i>
                        <h2><?= $a->judul; ?></h2>
                        <p><?= substr($a->isi, 0, 100) ?>...</p>
                    </div>
                </a>

            <?php endforeach; ?>

        </div>

        <a href="javascript:window.history.go(-1);">
            <div class="close-container">
                <div class="leftright"></div>
                <div class="rightleft"></div>
                <label class="close">Kembali</label>
            </div>
        </a>

    </div>

</body>

</html>