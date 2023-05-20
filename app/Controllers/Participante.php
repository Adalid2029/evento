<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Hermawan\DataTables\DataTable;
use App\Models\ParticipanteModel;
use CodeIgniter\API\ResponseTrait;
use App\Controllers\Reportes\EventoReporte;

class Participante extends BaseController
{
    protected $participanteModel;
    use ResponseTrait;
    public function __construct()
    {
        $this->participanteModel = new ParticipanteModel();
    }
    public function listarParticipante($idEvento)
    {
        // var_dump($idEvento);
        return view('participante/listar_participantes', ['id_evento' => $idEvento]);
    }
    public function eliminarParticipante()
    {
        if ($this->participanteModel->delete($this->request->getPost('id_participante'))) {
            return  $this->respond(['tipo' => 'correcto'], 200);
        } else {
            return  $this->respond(['tipo' => 'incorrecto'], 500);
        }
    }
    public function listarParticipanteAjax($idEvento)
    {
        $participantes = $this->participanteModel->select('id_evento, id_participante, nombres, apellidos, celular, correo_electronico')->where(['id_evento' => $idEvento]);
        return DataTable::of($participantes)
            ->hide('id_evento')
            ->add('action', function ($row) {
                $row = (array)$row;
                return '
                <div class="btn btn-danger dropdown custom-dropdown p-2">
                    <div data-toggle="dropdown">
                    ' . lang('TablaParticipante.tituloAcciones') . '
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item btn-editar-participante" href="javascript:void(0)" data-id-participante="' . $row['id_participante'] . '" data-toggle="modal" data-target="#creat-event">' . lang('TablaParticipante.tituloEditarParticipante') . '</a>
                        <a class="dropdown-item btn-eliminar-participante" href="javascript:void(0)" data-id-participante="' . $row['id_participante'] . '" >' . lang('TablaParticipante.tituloEliminarParticipante') . '</a>
                        <a class="dropdown-item" href="' . site_url('participantes/imprimir-boleto/' . $row['id_evento'] . '/' . $row['id_participante']) . '" target="_blank">' . lang('TablaParticipante.participanteTituloImprimirEvento') . '</a>
                    </div>
                </div>';
            }, 'first')
            ->toJson();
    }
    public function insertarParticipante()
    {
        $validation = \Config\Services::validation();

        $validation->setRule('id_evento', 'numero evento', 'required|is_natural_no_zero');
        $validation->setRule('nombres', 'nombres', 'required|min_length[2]|max_length[45]');
        $validation->setRule('apellidos', 'apellidos', 'required|min_length[3]|max_length[45]');
        $validation->setRule('celular', 'celular', 'required|is_natural_no_zero|exact_length[8]');
        $validation->setRule('correo_electronico', 'correo electrónico', ['required', 'valid_email']);

        $correoElectronico = array_column($this->participanteModel->findAll(), 'correo_electronico');
        if (in_array($this->request->getPost('correo_electronico'), $correoElectronico))
            return   $this->respond(['tipo' => 'incorrecto', 'data' =>
            ['error' => ['correo_electronico' => 'Ya existe un correo electrónico ' . $this->request->getPost('correo_electronico'),]]], 500);

        if ($validation->withRequest($this->request)->run()) {
            $idParticipante = $this->participanteModel->save([
                'id_evento' => $this->request->getPOst('id_evento'),
                'nombres' => $this->request->getPOst('nombres'),
                'apellidos' => $this->request->getPOst('apellidos'),
                'celular' => $this->request->getPOst('celular'),
                'ci_participante' => $this->request->getPOst('ci_participante'),
                'correo_electronico' => $this->request->getPOst('correo_electronico'),
            ]);
            if ($idParticipante) {
                return  $this->respond(['tipo' => 'correcto'], 200);
            } else {
                return $this->respond(['tipo' => 'incorrecto'], 500);
            }
        } else {
            return $this->respond(['tipo' => 'incorrecto', 'data' => ['error' => $validation->getErrors()]], 500);
        }
    }
    public function agregarParticipante($idEvento = '')
    {
        return view('participante/insertar_participante', ['id_evento' => $idEvento]);
    }
    public function editarParticipante($idEvento, $idParticipante)
    {
        $participante = $this->participanteModel->find($idParticipante);
        return view('participante/insertar_participante', ['participante' => $participante, 'id_evento' => $idEvento]);
    }
    public function actualizarParticipante()
    {
        $validation = \Config\Services::validation();

        $validation->setRule('id_evento', 'numero evento', 'required|is_natural_no_zero');
        $validation->setRule('nombres', 'nombres', 'required|min_length[2]|max_length[45]');
        $validation->setRule('apellidos', 'apellidos', 'required|min_length[3]|max_length[45]');
        $validation->setRule('celular', 'celular', 'required|is_natural_no_zero|exact_length[8]');
        $validation->setRule('correo_electronico', 'correo electrónico', ['required', 'valid_email']);


        if ($validation->withRequest($this->request)->run()) {
            $esCorrecto = $this->participanteModel->update($this->request->getPost('id_participante'), [
                'id_evento' => $this->request->getPost('id_evento'),
                'nombres' => $this->request->getPost('nombres'),
                'apellidos' => $this->request->getPost('apellidos'),
                'celular' => $this->request->getPost('celular'),
                'ci_participante' => $this->request->getPost('ci_participante'),
                'correo_electronico' => $this->request->getPost('correo_electronico'),
            ]);
            if ($esCorrecto) {
                return  $this->respond(['tipo' => 'correcto'], 200);
            } else {
                return $this->respond(['tipo' => 'incorrecto'], 500);
            }
        } else {
            return $this->respond(['tipo' => 'incorrecto', 'data' => ['error' => $validation->getErrors()]], 500);
        }
    }
    public function imprimirBoletoParticipante(int $idEvento, int $idParticipante = null)
    {
        $this->response->setContentType('application/pdf');
        $eventoReporte = new EventoReporte();

        if (is_null($idParticipante))
            $eventoParticipante = $this->participanteModel->listarEventoParticipante(['ci_evento.id_evento' => $idEvento])->get()->getResultArray();
        else
            $eventoParticipante = $this->participanteModel->listarEventoParticipante(['ci_evento.id_evento' => $idEvento, 'id_participante' => $idParticipante])->get()->getResultArray();
        $eventoReporte->reporteBoletoParticipante($eventoParticipante);
    }
}
