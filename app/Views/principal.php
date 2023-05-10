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
                <button type="button" class="close" data-dismiss="modal" id="cerrar-modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formulario-crear-evento">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20"><?= lang('EventoAdicionar.tituloEvento') ?></label>
                                    <input type="text" class="form-control" id="nombre_evento" placeholder="<?= lang('EventoAdicionar.descripcionTituloEvento') ?>" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="descripcion_evento"><?= lang('EventoAdicionar.descripcionEvento') ?></label>
                                    <textarea class="form-control" id="descripcion_evento" placeholder="<?= lang('EventoAdicionar.descripcionDescripcionEvento') ?>" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="fecha_evento"><?= lang('EventoAdicionar.fechaEvento') ?></label>
                                    <div class="input-group clockpicker">
                                        <input type="date" class="form-control" id="fecha_evento" />
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
                                    <label class="m-t-20" for="estado_evento"><?= lang('EventoAdicionar.estadoEvento') ?></label>
                                    <select class="form-control" id="estado_evento">
                                        <option value=""><?= lang('EventoAdicionar.descripcionEstadoEvento') ?></option>
                                        <option value="ACTIVO">ACTIVO</option>
                                        <option value="INACTIVO">INACTIVO</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-danger m-t-50" id="evento-adicionar"><?= lang('EventoAdicionar.crearEvento') ?></button>
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
                    'nombre_evento': $('#nombre_evento').val(),
                    'descripcion_evento': $('#descripcion_evento').val(),
                    'fecha_evento': $('#fecha_evento').val(),
                    'estado_evento': $('#estado_evento').val(),
                }
            }).done(function(respuesta) {
                if (respuesta.tipo == 'correcto') {
                    alert('Evento creado correctamente');
                    $('#cerrar-modal').click();
                }
            }).fail(function(respuesta) {
                resp = respuesta.responseJSON.data.error;
                mensaje = '';
                for (const valores in resp) {
                    mensaje += `${resp[valores]}\n`;
                }
                alert('El evento no se creo, ' + mensaje)
            });
        })
    })
</script>
<?= $this->endSection() ?>