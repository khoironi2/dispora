<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<!-- Mirrored from offsetcode.com/themes/messenger/2.1.0/light/chat-direct.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Nov 2021 09:28:45 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no, viewport-fit=cover">
    <?php foreach ($pengaturan as $key) : ?>
        <title><?= $key['nama_aplikasi'] ?></title>
        <link rel="shortcut icon" href="<?= base_url('assets/img/logo/' . $key['logo_aplikasi']) ?>" />
    <?php endforeach ?>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="<?= base_url('assets/chat/') ?>css/css2.css" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/chat/') ?>css/template.bundle.css">

    <link rel="stylesheet" href="<?= base_url('assets/chat/') ?>css/css.css" />
    <!--end::Fonts-->


    <!-- <link rel="stylesheet" href="<?= base_url('assets/') ?>lib/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>lib/css/font-awesome.min.css">

    <!-- Begin emoji-picker Stylesheets -->
    <link href="<?= base_url('assets/') ?>lib/css/emoji.css" rel="stylesheet">

    <link href="<?= base_url('assets/') ?>theme/demo5/dist/assets/plugins/global/plugins.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />

</head>

<body>