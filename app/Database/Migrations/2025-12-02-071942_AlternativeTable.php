<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlternativeTable extends Migration
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
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            ],
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('alternative');
    }

    public function down()
    {
        $this->forge->dropTable('alternative');
    }
}
