<div class="modal-header">
    <h2><?= isset($participante) ? lang('TablaParticipante.participanteTituloEditarParticipante') : lang('TablaParticipante.participanteTituloAdicionar') ?></h2>
    <button type="button" class="close" data-dismiss="modal" id="cerrar-modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="formulario-agregar-participante" action="<?= site_url(route_to('Participante::insertarParticipante')) ?>">
        <input type="hidden" name="id_evento" value="<?= $id_evento ?>">
        <input type="hidden" name="id_participante" value="<?= isset($participante) ? $participante['id_participante'] : '' ?>" value="<?= isset($participante) ? $participante['id_participante'] : '' ?>">

        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-6">
                        <label class="m-t-20"><?= lang('TablaParticipante.participanteTituloNombres') ?></label>
                        <input type="text" class="form-control" name="nombres" value="<?= isset($participante) ? $participante['nombres'] : '' ?>" />
                    </div>
                    <div class="col-md-6">
                        <label class="m-t-20"><?= lang('TablaParticipante.participanteTituloApellidos') ?></label>
                        <input type="text" class="form-control" name="apellidos" value="<?= isset($participante) ? $participante['apellidos'] : '' ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="m-t-20"><?= lang('TablaParticipante.participanteTituloCelular') ?></label>
                        <input type="number" class="form-control" name="celular" value="<?= isset($participante) ? $participante['celular'] : '' ?>" />
                    </div>
                    <div class="col-md-6">
                        <label class="m-t-20"><?= lang('TablaParticipante.participanteTituloCorreoElectronico') ?></label>
                        <input type="email" class="form-control" name="correo_electronico" value="<?= isset($participante) ? $participante['correo_electronico'] : '' ?>" />
                    </div>
                </div>
                <?php if (isset($participante)) : ?>
                    <button class="btn btn-danger m-t-50" id="btn-participante-actualizar"><?= lang('TablaParticipante.participanteTituloActualizarParticipante') ?></button>
                <?php else : ?>
                    <button class="btn btn-danger m-t-50" id="btn-participante-adicionar"><?= lang('TablaParticipante.participanteTituloAgregarParticipante')  ?></button>
                <?php endif ?>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        var dataTable = $('#tbl-listar-participantes').DataTable();
        const swalBotonesPersonalizados = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })
        var formulario = $('#formulario-agregar-participante');
        $('#btn-participante-adicionar').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $.post($(formulario).attr('action'), $(formulario).serialize(), function(respuesta) {
                if (respuesta.tipo == 'correcto') {
                    swalBotonesPersonalizados.fire({
                        title: 'Correcto',
                        text: 'El participante se adiciono correctamente',
                        icon: 'success',
                        confirmButtonText: 'Continuar'
                    })
                    dataTable.ajax.reload();
                    $('#cerrar-modal').click();
                }
            }).fail(function(respuesta) {
                resp = respuesta.responseJSON.data.error;
                mensaje = '';
                for (const valores in resp) {
                    mensaje += `${resp[valores]}\n`;
                }
                swalBotonesPersonalizados.fire({
                    title: 'Error',
                    text: 'El participante no se agrego\n' + mensaje,
                    icon: 'error',
                    confirmButtonText: 'Revisar'
                })
            })
        })
        $('#btn-participante-actualizar').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $.post('<?= site_url('participantes/actualizar') ?>', $(formulario).serialize(), function(respuesta) {
                if (respuesta.tipo == 'correcto') {
                    swalBotonesPersonalizados.fire({
                        title: 'Correcto',
                        text: 'El participante se actualizo correctamente',
                        icon: 'success',
                        confirmButtonText: 'Continuar'
                    })
                    dataTable.ajax.reload();
                    $('#cerrar-modal').click();
                }
            }).fail(function(respuesta) {
                resp = respuesta.responseJSON.data.error;
                mensaje = '';
                for (const valores in resp) {
                    mensaje += `${resp[valores]}\n`;
                }
                swalBotonesPersonalizados.fire({
                    title: 'Error',
                    text: 'El participante no se agrego\n' + mensaje,
                    icon: 'error',
                    confirmButtonText: 'Revisar'
                })
            })
        })
    })
</script>