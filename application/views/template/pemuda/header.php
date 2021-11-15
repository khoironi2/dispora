<!DOCTYPE html>
<!--
Template Name: Keen - The Ultimate Bootstrap 4 HTML Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/
Support: https://keenthemes.com/theme-support
License: You must have a valid license purchased only from themes.getbootstrap.com(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/keen/demo5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 05:20:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = '<?= base_url('assets/') ?>www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <?php foreach ($pengaturan as $key) : ?>
        <title><?= $key['nama_aplikasi'] ?></title>
        <link rel="shortcut icon" href="<?= base_url('assets/img/logo/' . $key['logo_aplikasi']) ?>" />
    <?php endforeach ?>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="<?= base_url('assets/') ?>theme/demo5/dist/assets/plugins/custom/datatables/datatables.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />

    <link href="<?= base_url('assets/') ?>theme/demo5/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?= base_url('assets/') ?>theme/demo5/dist/assets/plugins/global/plugins.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>theme/demo5/dist/assets/plugins/custom/prismjs/prismjs.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>theme/demo5/dist/assets/css/style.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />
    <!--end::Layout Themes-->
    <!-- Hotjar Tracking Code for keenthemes.com -->
    <link href="<?= base_url('assets/') ?>theme/demo5/dist/assets/css/pages/wizard/wizard-21036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet" type="text/css" />
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1070954,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>
<!--end::Head-->