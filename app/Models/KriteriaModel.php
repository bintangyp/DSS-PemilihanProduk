<?php

namespace App\Models;

use CodeIgniter\Model;


class KriteriaModel extends Model
{
    protected $table            = 'kriteria';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['kode_kriteria', 'nama_kriteria', 'bobot', 'jenis'];

    public function getKriteria($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
