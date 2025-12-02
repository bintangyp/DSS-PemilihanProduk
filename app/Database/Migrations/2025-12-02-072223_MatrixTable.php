<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MatrixTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_alternatif' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_kriteria' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'nilai' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('matrix');
    }

    public function down()
    {
        $this->forge->dropTable('matrix');
    }
}
