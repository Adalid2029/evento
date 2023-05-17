<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Tyovent | Admin Dashboard</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('plantilla/tyovent/assets/plugins/chartist/css/chartist.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('plantilla/tyovent/main/css/style.css') ?>" />
    <link href="<?= base_url('plantilla/tyovent/assets/plugins/fullcalender/css/fullcalendar.css') ?>" rel="stylesheet">
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/common/common.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/jquery-ui/jquery-ui.min.js') ?>" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
</head>

<body>
    <?= $this->include('plantilla/header') ?>
    <?= $this->include('plantilla/menu') ?>
    <?= $this->renderSection('main') ?>
    <?= $this->include('plantilla/footer') ?>



    <script src="<?= base_url('plantilla/tyovent/assets/plugins/moment/moment.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/fullcalender/js/fullcalendar.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/fullcalender/js/fullcalendar-init.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/main/js/scripts.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/circle-progress/circle-progress.min.js') ?>" type="text/javascript"></script>

    <script src="<?= base_url('plantilla/tyovent/assets/plugins/chartist/js/chartist.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/main/js/dashboard.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') ?>" data-cf-settings="b281d09a20398d077f4bb74f-|49" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>