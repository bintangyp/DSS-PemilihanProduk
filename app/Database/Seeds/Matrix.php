<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Matrix extends Seeder
{
    public function run()
    {
        $data = [

            // ===== SUPLIER S01 =====
            ['kode_suplier' => 'S01', 'kode_kriteria' => 'C1', 'nilai' => '4'],
            ['kode_suplier' => 'S01', 'kode_kriteria' => 'C2', 'nilai' => '3'],
            ['kode_suplier' => 'S01', 'kode_kriteria' => 'C3', 'nilai' => '5'],
            ['kode_suplier' => 'S01', 'kode_kriteria' => 'C4', 'nilai' => '4'],
            ['kode_suplier' => 'S01', 'kode_kriteria' => 'C5', 'nilai' => '5'],

            // ===== SUPLIER S02 =====
            ['kode_suplier' => 'S02', 'kode_kriteria' => 'C1', 'nilai' => '3'],
            ['kode_suplier' => 'S02', 'kode_kriteria' => 'C2', 'nilai' => '4'],
            ['kode_suplier' => 'S02', 'kode_kriteria' => 'C3', 'nilai' => '4'],
            ['kode_suplier' => 'S02', 'kode_kriteria' => 'C4', 'nilai' => '3'],
            ['kode_suplier' => 'S02', 'kode_kriteria' => 'C5', 'nilai' => '4'],

            // ===== SUPLIER S03 =====
            ['kode_suplier' => 'S03', 'kode_kriteria' => 'C1', 'nilai' => '5'],
            ['kode_suplier' => 'S03', 'kode_kriteria' => 'C2', 'nilai' => '4'],
            ['kode_suplier' => 'S03', 'kode_kriteria' => 'C3', 'nilai' => '5'],
            ['kode_suplier' => 'S03', 'kode_kriteria' => 'C4', 'nilai' => '5'],
            ['kode_suplier' => 'S03', 'kode_kriteria' => 'C5', 'nilai' => '4'],

            // ===== SUPLIER S04 =====
            ['kode_suplier' => 'S04', 'kode_kriteria' => 'C1', 'nilai' => '2'],
            ['kode_suplier' => 'S04', 'kode_kriteria' => 'C2', 'nilai' => '3'],
            ['kode_suplier' => 'S04', 'kode_kriteria' => 'C3', 'nilai' => '3'],
            ['kode_suplier' => 'S04', 'kode_kriteria' => 'C4', 'nilai' => '3'],
            ['kode_suplier' => 'S04', 'kode_kriteria' => 'C5', 'nilai' => '3'],

            // ===== SUPLIER S05 =====
            ['kode_suplier' => 'S05', 'kode_kriteria' => 'C1', 'nilai' => '4'],
            ['kode_suplier' => 'S05', 'kode_kriteria' => 'C2', 'nilai' => '5'],
            ['kode_suplier' => 'S05', 'kode_kriteria' => 'C3', 'nilai' => '4'],
            ['kode_suplier' => 'S05', 'kode_kriteria' => 'C4', 'nilai' => '4'],
            ['kode_suplier' => 'S05', 'kode_kriteria' => 'C5', 'nilai' => '5'],
        ];

        $this->db->table('matrix')->insertBatch($data);
    }
}
