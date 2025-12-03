<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KriteriaTable extends Migration
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
            'kode_kriteria' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            ],
            'nama_kriteria' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis' => [
                'type' => 'ENUM',
                'constraint' => ['cost', 'benefit'],
            ],
            'bobot' => [
                'type' => 'INT',
                'constraint' => 11,
            ]

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kriteria');
    }

    public function down()
    {
        $this->forge->dropTable('kriteria');
    }
}
