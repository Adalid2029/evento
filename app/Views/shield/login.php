<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= lang('InicioSesion.tituloInicioSesion') ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="<?= base_url('plantilla/tyovent/main/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/css-personalizado.css') ?>">
</head>

<body>
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h1 class="titulo-inicio-sesion"><?= lang('InicioSesion.tituloInicioSesion') ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="setting-personal">
                        <?php if (session('error') !== null) : ?>
                            <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                        <?php elseif (session('errors') !== null) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php if (is_array(session('errors'))) : ?>
                                    <?php foreach (session('errors') as $error) : ?>
                                        <?= $error ?>
                                        <br>
                                    <?php endforeach ?>
                                <?php else : ?>
                                    <?= session('errors') ?>
                                <?php endif ?>
                            </div>
                        <?php endif ?>

                        <?php if (session('message') !== null) : ?>
                            <div class="alert alert-success" role="alert"><?= session('message') ?></div>
                        <?php endif ?>

                        <form action="<?= url_to('login') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"><?= lang('InicioSesion.tituloCorreoElectronico') ?></label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"><?= lang('InicioSesion.tituloContrasenia') ?></label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Remember me -->
                                    <?php if (setting('Auth.sessionConfig')['allowRemembering']) : ?>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked<?php endif ?>>
                                                <?= lang('Auth.rememberMe') ?>
                                            </label>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                                        <p class="text-center"><?= lang('Auth.forgotPassword') ?> <a href="<?= url_to('magic-link') ?>"><?= lang('Auth.useMagicLink') ?></a></p>
                                    <?php endif ?>

                                    <?php if (setting('Auth.allowRegistration')) : ?>
                                        <p class="text-center"><?= lang('Auth.needAccount') ?> <a href="<?= url_to('register') ?>"><?= lang('Auth.register') ?></a></p>
                                    <?php endif ?>
                                </div>
                                <div class="list-group-item text-center">
                                    <button class="btn btn-primary"><?= lang('Auth.login') ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p><?= lang('InicioSesion.descripcionPiePagina') ?></p>
                    <p><?= lang('InicioSesion.descripcionPiePaginaTitulo') ?></p>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('plantilla/tyovent/assets/plugins/common/common.min.js') ?>" type="text/javascript"></script>
</body>

</html>
<?= $this->endSection() ?>