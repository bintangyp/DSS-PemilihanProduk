<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuplierTable extends Migration
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
            'nama_suplier' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kontak_suplier' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'alamat_suplier' => [
                'type' => 'TEXT',
            ],
            'jenis_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('supliers');
    }

    public function down()
    {
        $this->forge->dropTable('supliers');
    }
}
