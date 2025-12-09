<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kriteria extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_kriteria' => 'C1',
                'nama_kriteria' => 'Harga',
                'jenis'         => 'cost',
                'bobot'         => 20
            ],
            [
                'kode_kriteria' => 'C2',
                'nama_kriteria' => 'Kelengkapan',
                'jenis'         => 'benefit',
                'bobot'         => 20
            ],
            [
                'kode_kriteria' => 'C3',
                'nama_kriteria' => 'Waktu Pengiriman',
                'jenis'         => 'cost',
                'bobot'         => 15
            ],
            [
                'kode_kriteria' => 'C4',
                'nama_kriteria' => 'Kualitas',
                'jenis'         => 'benefit',
                'bobot'         => 15
            ],
            [
                'kode_kriteria' => 'C5',
                'nama_kriteria' => 'Garansi',
                'jenis'         => 'benefit',
                'bobot'         => 15
            ],
            [
                'kode_kriteria' => 'C6',
                'nama_kriteria' => 'Konsistensi Stok',
                'jenis'         => 'benefit',
                'bobot'         => 15
            ],


        ];

        $this->db->table('kriteria')->insertBatch($data);
    }
}
