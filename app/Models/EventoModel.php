<?php

namespace App\Models;

use CodeIgniter\Model;

class EventoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ci_evento';
    protected $primaryKey       = 'id_evento';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_usuario', 'nombre_evento', 'descripcion_evento', 'fecha_evento', 'estado_evento'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function listarEvento($columnas = '*', $condicion = [])
    {
        $this->select($columnas);
        $this->join('users', 'ci_evento.id_usuario = users.id');
        empty($condicion) ?: $this->where($condicion);
        return $this;
    }
}
