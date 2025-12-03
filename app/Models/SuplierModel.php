<?php

namespace App\Models;

use CodeIgniter\Model;

class SuplierModel extends Model
{
    protected $table            = 'supliers';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['kode_suplier', 'nama_suplier', 'kontak_suplier', 'alamat_suplier', 'jenis_produk'];

    public function getSuplier($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
