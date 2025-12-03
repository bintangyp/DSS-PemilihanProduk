<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Suplier extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_suplier'   => 'S01',
                'nama_suplier'   => 'PT Sumber Data Teknologi',
                'kontak_suplier' => '081234567801',
                'alamat_suplier' => 'Jakarta',
                'jenis_produk'  => 'SSD'
            ],
            [
                'kode_suplier'   => 'S02',
                'nama_suplier'   => 'CV Media Storage',
                'kontak_suplier' => '081234567802',
                'alamat_suplier' => 'Bandung',
                'jenis_produk'  => 'HDD'
            ],
            [
                'kode_suplier'   => 'S03',
                'nama_suplier'   => 'PT Digital Komponen',
                'kontak_suplier' => '081234567803',
                'alamat_suplier' => 'Surabaya',
                'jenis_produk'  => 'SSD'
            ],
            [
                'kode_suplier'   => 'S04',
                'nama_suplier'   => 'CV Harddisk Jaya',
                'kontak_suplier' => '081234567804',
                'alamat_suplier' => 'Semarang',
                'jenis_produk'  => 'HDD'
            ],
            [
                'kode_suplier'   => 'S05',
                'nama_suplier'   => 'PT Solid Storage Indonesia',
                'kontak_suplier' => '081234567805',
                'alamat_suplier' => 'Yogyakarta',
                'jenis_produk'  => 'SSD'
            ],
        ];

        $this->db->table('supliers')->insertBatch($data);
    }
}
