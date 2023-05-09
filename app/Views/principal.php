<?= $this->extend('plantilla/base') ?>
<?= $this->section('main') ?>
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Net Sales</h4>
                        <div class="row">
                            <div class="col-xl-4">
                                <h6>This Week</h6>
                                <h4 class="color-primary">$5500.00</h4>
                            </div>
                            <div class="col-xl-4">
                                <h6>Previous Week</h6>
                                <h4 class="color-primary">$6550.00</h4>
                            </div>
                        </div>
                        <div id="simple-line-chart" class="ct-chart ct-golden-section m-t-15"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-15">TICKETS</h4>
                        <div class="tickets text-center m-t-50">
                            <div class="position-relative d-inline-block m-b-50">
                                <div id="circle"></div>
                                <div class="seat-content">
                                    <h2>90</h2>
                                    <span>Sold Seats</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h6>Total Seats</h6>
                                    <h4 class="color-primary">$5500.00</h4>
                                </div>
                                <div class="col-6">
                                    <h6>Sold Seats</h6>
                                    <h4 class="color-primary">$6550.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-15">UPCOMING EVENTS</h4>
                        <div class="upcoming-events">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('plantilla/tyovent/assets/images/thumb/1.png') ?>" alt="" />
                                        </td>
                                        <td>
                                            Event Name
                                            <a href="#"><i class="icofont icofont-social-google-map"></i>
                                                Location</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('plantilla/tyovent/assets/images/thumb/1.png') ?>" alt="" />
                                        </td>
                                        <td>
                                            Event Name
                                            <a href="#"><i class="icofont icofont-social-google-map"></i>
                                                Location</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('plantilla/tyovent/assets/images/thumb/1.png') ?>" alt="" />
                                        </td>
                                        <td>
                                            Event Name
                                            <a href="#"><i class="icofont icofont-social-google-map"></i>
                                                Location</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('plantilla/tyovent/assets/images/thumb/1.png') ?>" alt="" />
                                        </td>
                                        <td>
                                            Event Name
                                            <a href="#"><i class="icofont icofont-social-google-map"></i>
                                                Location</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-15">RECENT SELLS</h4>
                        <div class="upcoming-events">
                            <div class="row">
                                <div class="col-xl-4">
                                    <h6>This Week</h6>
                                    <h4 class="color-primary">$5500.00</h4>
                                </div>
                                <div class="col-xl-4">
                                    <h6>Previous Week</h6>
                                    <h4 class="color-primary">$6550.00</h4>
                                </div>
                            </div>
                            <div class="table-responsive m-t-15">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('plantilla/tyovent/assets/images/thumb/1.png') ?>" alt="" />
                                        </td>
                                        <td>
                                            John Doe
                                            <a href="#"> Event Name Here</a>
                                        </td>
                                        <td>X1</td>
                                        <td>165</td>
                                        <td>
                                            <div class="dropdown custom-dropdown">
                                                <div data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('plantilla/tyovent/assets/images/thumb/1.png') ?>" alt="" />
                                        </td>
                                        <td>
                                            John Doe
                                            <a href="#"> Event Name Here</a>
                                        </td>
                                        <td>X1</td>
                                        <td>165</td>
                                        <td>
                                            <div class="dropdown custom-dropdown">
                                                <div data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('plantilla/tyovent/assets/images/thumb/1.png') ?>" alt="" />
                                        </td>
                                        <td>
                                            John Doe
                                            <a href="#"> Event Name Here</a>
                                        </td>
                                        <td>X1</td>
                                        <td>165</td>
                                        <td>
                                            <div class="dropdown custom-dropdown">
                                                <div data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('plantilla/tyovent/assets/images/thumb/1.png') ?>" alt="" />
                                        </td>
                                        <td>
                                            John Doe
                                            <a href="#"> Event Name Here</a>
                                        </td>
                                        <td>X1</td>
                                        <td>165</td>
                                        <td>
                                            <div class="dropdown custom-dropdown">
                                                <div data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-15">Total Seats</h4>
                        <div class="total-seats text-center m-t-50">
                            <div class="position-relative d-inline-block m-b-50">
                                <div id="circle1"></div>
                                <div class="seat-content">
                                    <h2>350</h2>
                                    <span>Total Sells</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h6>Total Seats</h6>
                                    <h4 class="color-primary">$5500.00</h4>
                                </div>
                                <div class="col-6">
                                    <h6>Sold Seats</h6>
                                    <h4 class="color-primary">$6550.00</h4>
                                </div>
                            </div>
                        </div>
                        <h5 class="m-t-30 m-b-15">
                            Sold Seats <span class="pull-right">95</span>
                        </h5>
                        <div class="progress">
                            <div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height: 4px" role="progressbar">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Online Sells</h4>
                        <div class="row">
                            <div class="col">
                                <h6>Rough Cost</h6>
                                <h4 class="color-primary">$5500.00</h4>
                            </div>
                        </div>
                        <div id="simple-line-chart2" class="ct-chart ct-golden-section"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">EMAIL COMPAIGN</h4>
                        <div class="campaign-progress">
                            <p class="m-t-15 m-b-5">
                                Send Emails <span class="pull-right">+165</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height: 4px" role="progressbar">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                            <p class="m-t-15 m-b-5">
                                Clicks <span class="pull-right">+355</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height: 4px" role="progressbar">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade creat-event" id="creat-event">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2><?= lang('EventoAdicionar.crearEvento') ?></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formulario-crear-evento">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20">TITLE</label>
                                    <input type="text" class="form-control" id="titulo-evento" placeholder="Music Awards" />
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
                            <button class="btn btn-danger m-t-50" id="evento-adicionar">CREATE EVENT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#evento-adicionar').on('click', function(e) {
            // datosFormulario = new FormData($('#formulario-crear-evento'));
            e.preventDefault();
            e.stopPropagation();
            $.ajax({
                url: '<?= base_url('/evento/adicionar') ?>',
                type: 'post',
                data: {
                    'titulo_evento': $('#titulo-evento').val()
                }
            })
        })
    })
</script>
<?= $this->endSection() ?>