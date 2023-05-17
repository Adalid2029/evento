<?= $this->extend('plantilla/base') ?>
<?= $this->section('main') ?>
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1>Elements</h1>
            </div>
            <div class="col-7">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Elements</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="row">
                    <?php foreach ($evento as $key => $value) : ?>
                        <div class="col-lg-4">
                            <div class="card event-card">
                                <div class="card-header">
                                    <div class="media">
                                        <img class="mr-3 img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/event-head.png') ?>" alt="prueba">
                                        <div class="media-body">
                                            <h3 class="mt-0">Por <?= $value['username'] ?></h3>
                                            <p>5 min ago</p>
                                        </div>
                                        <div class="dropdown custom-dropdown">
                                            <div data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-card-img">
                                    <img class="img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/event-main.jpg') ?>" alt="placeholder image" data-toggle="modal" data-target="#evemt-view">
                                    <h4><?= $value['nombre_evento'] ?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <h5><?= lang('EventoListar.fechaEvento') ?></h5>
                                            <p><?= date('d/m/Y', strtotime($value['fecha_evento'])) ?></p>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <h5>Location</h5>
                                            <p>New York</p>
                                        </div>
                                        <div class="col-auto">
                                            <h5>Tickets</h5>
                                            <p>Avilable 26/ 100</p>
                                        </div> -->
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5><?= lang('EventoListar.descripcion') ?></h5>
                                            <p><?= $value['descripcion_evento'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="card-sponsor">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <h4>Sponsor by</h4>
                                            <div class="card-sponsor-img">
                                                <a href="#">
                                                    <img class="img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/card-foot1.png') ?>" alt="placeholder image">
                                                </a>
                                                <a href="#">
                                                    <img class="img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/card-foot2.png') ?>" alt="placeholder image">
                                                </a>
                                                <a href="#">
                                                    <img class="img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/card-foot3.png') ?>" alt="placeholder image">
                                                </a>
                                                <a href="#">
                                                    <img class="img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/card-foot4.png') ?>" alt="placeholder image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <p>Free</p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="card-footer">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>126
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment"></i>03
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= site_url("participantes/listar/" . $value['id_evento'] . "") ?>">
                                                <i class="fa fa-sign-out"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="pull-right">
                                        <a href="#">
                                            <i class="fa fa-bar-chart"></i><?= mb_convert_case($value['estado_evento'], MB_CASE_TITLE) ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <!-- <div class="col-xl-3 left-line">
                <div class="event-sideber m-l-15">
                    <h4>TOP SPONSORS</h4>
                    <div class="event-sideber-img">
                        <a href="#">
                            <img class="img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/tp-spncr.png') ?>" alt="placeholder image">
                        </a>
                        <a href="#">
                            <img class="img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/tp-spncr2.png') ?>" alt="placeholder image">
                        </a>
                        <a href="#">
                            <img class="img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/tp-spncr3.png') ?>" alt="placeholder image">
                        </a>
                        <a href="#">
                            <img class="img-fluid" src="<?= base_url('plantilla/tyovent/assets/images/events/tp-spncr4.png') ?>" alt="placeholder image">
                        </a>
                    </div>
                    <div class="event-sideber-category">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li>
                                <a href="#">All Categories</a>
                            </li>
                            <li>
                                <a href="#">Art</a>
                            </li>
                            <li>
                                <a href="#">Books</a>
                            </li>
                            <li>
                                <a href="#">Food</a>
                            </li>
                            <li>
                                <a href="#">Sports</a>
                            </li>
                            <li>
                                <a href="#">Films</a>
                            </li>
                            <li>
                                <a href="#">Awards</a>
                            </li>
                            <li>
                                <a href="#">Men</a>
                            </li>
                            <li>
                                <a href="#">Parties</a>
                            </li>
                            <li>
                                <a href="#">Technology</a>
                            </li>
                            <li>
                                <a href="#">Science</a>
                            </li>
                            <li>
                                <a href="#">Women</a>
                            </li>
                            <li>
                                <a href="#">Music</a>
                            </li>
                            <li>
                                <a href="#">Comendy</a>
                            </li>
                            <li>
                                <a href="#">Show</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>