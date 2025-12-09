<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriProductTable extends Migration
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
            'kode_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => false
            ],
            'kategori_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kategoriproduks');
    }

    public function down()
    {
        $this->forge->dropTable('kategoriproduks');
    }
}
