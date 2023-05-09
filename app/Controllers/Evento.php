<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Evento extends BaseController
{
    // insertar
    // actualizar
    // eliminar
    // mostrar
    public function insertarEvento()
    {
        var_dump($this->request->getPost());
    }
}
