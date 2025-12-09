<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriProduk extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_kategori'    => 'P001',
                'kategori_produk'  => 'SSD 120GB'
            ],
            [
                'kode_kategori'    => 'P002',
                'kategori_produk'  => 'SSD 240GB'
            ],
            [
                'kode_kategori'    => 'P003',
                'kategori_produk'  => 'HDD 1TB'
            ],
            [
                'kode_kategori'    => 'P004',
                'kategori_produk'  => 'RAM 8GB'
            ],
            [
                'kode_kategori'    => 'P005',
                'kategori_produk'  => 'RAM 16GB'
            ]
        ];

        // Using Query Builder
        $this->db->table('kategoriproduks')->insertBatch($data);
    }
}
