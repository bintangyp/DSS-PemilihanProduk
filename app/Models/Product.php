<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['kode_product', 'jenis_produk', 'kode_suplier', 'waktu_pengiriman', 'kualitas_produk', 'garansi_produk', 'konsistensi_stok', 'kelengkapan'];

    public function getProduct($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
