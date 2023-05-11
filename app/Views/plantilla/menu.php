<div class="menu">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <nav class="topbar-nav">
                    <ul class="metismenu" id="metismenu">
                        <?php if (auth()->user()->inGroup('administrador')) : ?>
                            <li>
                                <a href="index.html">
                                    <span class="fa fa-tachometer"></span> DASHBOARD
                                </a>
                            </li>

                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-calendar-check-o"></span> <?= lang('Menu.menuEvento') ?>
                                </a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="<?= site_url('evento/listar/ACTIVO') ?>"><?= lang('Menu.menuEventoActivo') ?></a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('evento/listar/INACTIVO') ?>"><?= lang('Menu.menuEventoInactivo') ?></a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('evento/listar') ?>"><?= lang('Menu.menuMisEventos') ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="peoples.html">
                                    <span class="fa fa-users"></span> Peoples
                                </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-envelope"></span> Messages
                                </a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="message.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="chat.html">Chat</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= base_url('calendario') ?>">
                                    <span class="fa fa-calendar"></span> Calender
                                </a>
                            </li>
                        <?php endif ?>

                        <?php if (auth()->user()->inGroup('usuario')) : ?>
                            <li>
                                <a href="index.html">
                                    <span class="fa fa-tachometer"></span> DASHBOARD
                                </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-envelope"></span> Messages
                                </a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="message.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="chat.html">Chat</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= base_url('calendario') ?>">
                                    <span class="fa fa-calendar"></span> Calender
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>