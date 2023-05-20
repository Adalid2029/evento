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
            <div class="col-12">
                <div class="float-right">
                    <a href="#" class="btn btn-primary create-event-btn" id="btn-agregar-participante" data-toggle="modal" data-target="#creat-event"><?= lang('TablaParticipante.tituloAdicionarParticipante') ?></a>
                    <a href="<?= site_url(route_to('Participante::imprimirBoletoParticipante', $id_evento)) ?>" class="btn btn-primary create-event-btn" target="_blank"><?= lang('TablaParticipante.participanteTituloImprimirTodoEvento') ?></a>
                </div>
                <table class="table" id="tbl-listar-participantes">
                    <thead>
                        <tr>
                            <th scope="col"><?= lang('TablaParticipante.tituloAcciones') ?></th>
                            <th scope="col"><?= lang('TablaParticipante.tituloIdParticipante') ?></th>
                            <th scope="col"><?= lang('TablaParticipante.tituloNombres') ?></th>
                            <th scope="col"><?= lang('TablaParticipante.tituloApellidos') ?></th>
                            <th scope="col"><?= lang('TablaParticipante.tituloCelular') ?></th>
                            <th scope="col"><?= lang('TablaParticipante.tituloCorreoElectronico') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade creat-event" id="creat-event">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="modal-content">

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        const swalBotonesPersonalizados = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })
        var dataTable = $('#tbl-listar-participantes').DataTable({
            processing: true,
            serverSide: true,
            ajax: '<?= base_url('participantes/listar-ajax/' . $id_evento . '') ?>',
            columnDefs: [{
                    targets: 0,
                    orderable: false,

                }, //target -1 means last column
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
        }).on('click', '.btn-eliminar-participante', function(e) {
            Swal.fire({
                title: '¿Estas seguro de eliminar al participante?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.post('<?= site_url('participantes/eliminar') ?>', {
                        'id_participante': $(this).data('id-participante')
                    }, function(respuesta) {
                        if (respuesta.tipo == 'correcto') {
                            swalBotonesPersonalizados.fire({
                                title: 'Correcto',
                                text: 'El participante se elimino correctamente',
                                icon: 'success',
                                confirmButtonText: 'Continuar'
                            })
                            dataTable.ajax.reload();
                        }
                    })
                }
            })

        }).on('click', '.btn-editar-participante', function(e) {
            id_participante = $(this).data('id-participante');
            $.get("<?= site_url('participantes/modificar/' . $id_evento . "/") ?>" + id_participante, function(respuesta) {
                $('#modal-content').html(respuesta);
            })
        })

        var formulario = $('#formulario-agregar-participante');
        $('#btn-agregar-participante').on('click', function() {
            // $(formulario)[0].reset();
            $.get('<?= site_url('participantes/agregar/' . $id_evento) ?>', function(respuesta) {
                $('#modal-content').html(respuesta);
            });
        })

    });
</script>
<?= $this->endSection() ?>