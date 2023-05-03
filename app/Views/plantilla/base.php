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

    <link rel="stylesheet" href="<?= base_url('plantilla/tyovent/assets/plugins/chartist/css/chartist.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('plantilla/tyovent/main/css/style.css') ?>" />
    <link href="<?= base_url('plantilla/tyovent/assets/plugins/fullcalender/css/fullcalendar.css') ?>" rel="stylesheet">
</head>

<body>
    <?= $this->include('plantilla/header') ?>
    <?= $this->include('plantilla/menu') ?>
    <?= $this->renderSection('main') ?>
    <?= $this->include('plantilla/footer') ?>

    <div class="modal fade creat-event" id="creat-event">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>CREATE EVENT</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20">TITLE</label>
                                    <input type="text" class="form-control" placeholder="Music Awards" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="exampleFormControlTextarea">DESCRIPTION</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea" placeholder="In eu urna enim. Cras hendrerit ullamcorper malesuada. In justo lacus, pharetra nec imperdiet sed, congue at metus. Mauris eleifend nec neque in pretium. Nulla eleifend, enim ultrices ultrices ullamcorper." rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="m-t-20" for="exampleFormControlTextarea">DAY</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" value="15 June 2018" />
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="m-t-20" for="exampleFormControlTextarea">HOUR</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" value="10 am" />
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="m-t-20" for="exampleFormControlTextarea">MINUTE</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" value="15 m" />
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="m-t-20" for="exampleFormControlTextarea">DURATION</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" value="2 h 45 m" />
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="exampleFormControlTextarea">LOCATION</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control b-r-0" value="New York City" />
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-crosshairs"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <label class="m-t-20">ADD SPONSORS</label>
                            <form class="search-area" action="#" method="post">
                                <input type="text" class="form-control" placeholder="Search Location" />
                                <i class="fa fa-search"></i>
                            </form>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="exampleFormControlTextarea">ADD GUEST</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control b-r-0" value="Search location" />
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="val-skill">SET REMINDER</label>
                                    <select class="form-control" id="val-skill" name="val-skill">
                                        <option value="">Please select</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="javascript">JavaScript</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-danger m-t-50">CREATE EVENT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('plantilla/tyovent/assets/plugins/common/common.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/jquery-ui/jquery-ui.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/moment/moment.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/fullcalender/js/fullcalendar.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/fullcalender/js/fullcalendar-init.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/main/js/scripts.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/circle-progress/circle-progress.min.js') ?>" type="text/javascript"></script>

    <script src="<?= base_url('plantilla/tyovent/assets/plugins/chartist/js/chartist.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/tyovent/main/js/dashboard.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('plantilla/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') ?>" data-cf-settings="b281d09a20398d077f4bb74f-|49" defer=""></script>
</body>

</html>