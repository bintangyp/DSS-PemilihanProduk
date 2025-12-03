<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HasilSAWTable extends Migration
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
            'id_suplier' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'jenis_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'nilai_akhir' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            ],
            'ranking' => [
                'type' => 'INT',
                'constraint' => 11,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('hasil_saw');
    }

    public function down()
    {
        $this->forge->dropTable('hasil_saw');
    }
}
