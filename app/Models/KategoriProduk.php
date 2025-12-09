<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriProduk extends Model
{
    protected $table            = 'kategoriproduks';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['kode_kategori', 'kategori_produk'];

    public function getKategoriProduk($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
