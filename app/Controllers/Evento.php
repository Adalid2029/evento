<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventoModel;
use CodeIgniter\API\ResponseTrait;

class Evento extends BaseController
{
    protected $eventoModel;
    public function __construct()
    {
        $this->eventoModel = new EventoModel();
    }
    // insertar
    // actualizar
    // eliminar
    // mostrar
    use ResponseTrait;
    public function insertarEvento()
    {
        $validation = \Config\Services::validation();

        // var_dump($this->request->getPost());

        $validation->setRule('nombre_evento', 'nombre evento', 'required|min_length[10]|max_length[550]');
        $validation->setRule('descripcion_evento', 'descripcion evento', 'min_length[10]|max_length[550]');
        $validation->setRule('fecha_evento', 'fecha evento', 'required|valid_date');
        $validation->setRule('estado_evento', 'estado evento', ['required', 'in_list[ACTIVO,INACTIVO]']);

        if ($validation->withRequest($this->request)->run()) {
            $idEvento = $this->eventoModel->save([
                'id_usuario' => user_id(),
                'nombre_evento' => $this->request->getPost('nombre_evento'),
                'descripcion_evento' => $this->request->getPost('descripcion_evento'),
                'fecha_evento' => $this->request->getPost('fecha_evento'),
                'estado_evento' => $this->request->getPost('estado_evento')
            ]);
            if ($idEvento) {
                return  $this->respond(['tipo' => 'correcto'], 200);
            } else {
                return $this->respond(['tipo' => 'incorrecto'], 500);
            }
        } else {
            return $this->respond(['tipo' => 'incorrecto', 'data' => ['error' => $validation->getErrors()]], 500);
        }
    }

    public function listarEvento($estadoEvento = '')
    {
        // $eventoFiltrado = $this->eventoModel->where(['estado_evento' => $estadoEvento])->findAll();
        $estadoEvento =  $estadoEvento == '' ? ['id_usuario' => user_id()] : ['estado_evento' => $estadoEvento];
        $eventoFiltrado = $this->eventoModel->listarEvento('id_evento, nombre_evento, descripcion_evento,fecha_evento, descripcion_evento, username, estado_evento', $estadoEvento);
        $eventoFiltrado = $eventoFiltrado->get()->getResultArray();
        // echo '<pre>';
        // var_dump($this->eventoModel->getLastQuery());
        // var_dump($eventoFiltrado);
        return view('evento/listar_eventos', ['evento' => $eventoFiltrado]);
    }
}
