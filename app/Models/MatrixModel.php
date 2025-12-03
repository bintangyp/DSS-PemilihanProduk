<?php

namespace App\Models;

use CodeIgniter\Model;

class MatrixModel extends Model
{
    protected $table            = 'matrix';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_suplier', 'id_kriteria', 'nilai'];

    public function getMatrix($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
