<?php

namespace App\Controllers;

use App\Models\KriteriaModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->KriteriaModel = new KriteriaModel();
        $this->AlternatifModel = new \App\Models\AlternatifModel();
    }
    public function halamanadmin()
    {
        echo view('haladmin/template/header');
        echo view('haladmin/halamanisi');
        echo view('haladmin/template/footer');
    }
    public function kriteria()
    {
        $data['kriteria'] = $this->KriteriaModel->getKriteria();
        echo view('haladmin/template/header');
        echo view('haladmin/data/kriteria/index', $data);
        echo view('haladmin/template/footer');
    }
    public function alternatif()
    {
        $data['alternatif'] = $this->AlternatifModel->getAlternatif();
        echo view('haladmin/template/header');
        echo view('haladmin/data/alternatif/index', $data);
        echo view('haladmin/template/footer');
    }
}
