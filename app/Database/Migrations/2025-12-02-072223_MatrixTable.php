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
            'kode_suplier' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            ],
            'kode_kriteria' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            ],
            'nilai' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('matrix');
    }

    public function down()
    {
        $this->forge->dropTable('matrix');
    }
}
