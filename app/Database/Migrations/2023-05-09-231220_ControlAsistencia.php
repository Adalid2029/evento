<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\MySQLi\Forge;

class ControlAsistencia extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_evento' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_usuario' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'nombre_evento' => [
                'type' => 'VARCHAR',
                'constraint' => 550,
            ],
            'descripcion_evento' => [
                'type' => 'VARCHAR',
                'constraint' => 550
            ],
            'fecha_evento' => [
                'type' => 'DATE',
            ],
            'estado_evento' => [
                'type' => 'ENUM',
                'constraint' => ['ACTIVO', 'INACTIVO'],
            ]
        ]);

        $this->forge->addKey('id_evento', true);
        $this->forge->createTable('ci_evento');

        $this->forge->addField([
            'id_participante' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_evento' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'nombres' => [
                'type' => 'VARCHAR',
                'constraint' => 45
            ],
            'apellidos' => [
                'type' => 'VARCHAR',
                'constraint' => 45
            ],
            'celular' => [
                'type' => 'INT',
                'constraint' => 8
            ],
            'correo_electronico' => [
                'type' => 'VARCHAR',
                'constraint' => 45
            ],
        ]);

        $this->forge->addKey('id_participante', true);
        $this->forge->addForeignKey('id_evento', 'ci_evento', 'id_evento', 'CASCADE', 'CASCADE');
        $this->forge->createTable('ci_participante');

        $this->forge->addField([
            'id_asistencia' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_participante' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'fecha_registro' => [
                'type' => 'DATETIME',
            ]
        ]);
        $this->forge->addKey('id_asistencia', true);
        $this->forge->addForeignKey('id_participante', 'ci_participante', 'id_participante', 'CASCADE', 'CASCADE');
        $this->forge->createTable('ci_asistencia');


        $this->forge->addField([
            'id_tipo_registro' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_evento' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'fecha_control' => [
                'type' => 'DATE',
            ],
            'hora_inicio' => [
                'type' => 'TIME',
            ],
            'hora_fin' => [
                'type' => 'TIME',
            ]
        ]);
        $this->forge->addKey('id_tipo_registro', true);
        $this->forge->addForeignKey('id_evento', 'ci_evento', 'id_evento', 'CASCADE', 'CASCADE');
        $this->forge->createTable('ci_tipo_registro');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('ci_evento');
        $this->forge->dropTable('ci_participante');
        $this->forge->dropTable('ci_asistencia');
        $this->forge->dropTable('ci_tipo_registro');
        $this->db->enableForeignKeyChecks();
    }
}
