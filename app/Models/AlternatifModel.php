<?php

namespace App\Models;

use CodeIgniter\Model;


class AlternatifModel extends Model
{
    protected $table            = 'alternative';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_alternatif', 'nama_alternatif'];

    public function getAlternatif($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
