<?php

namespace App\Controllers;

use App\Models\KriteriaModel;
use App\Models\MatrixModel;
use App\Models\SuplierModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->KriteriaModel = new \App\Models\KriteriaModel();
        $this->SuplierModel = new \App\Models\SuplierModel();
        $this->MatrixModel = new \App\Models\MatrixModel();
    }
    public function halamanadmin()
    {
        $kriteria = (new KriteriaModel())->findAll();
        $matrix = (new MatrixModel())->findAll();

        $suplierModel = new SuplierModel();
        // Ambil daftar jenis produk (DISTINCT)
        $jenisProduk = $suplierModel
            ->select('jenis_produk')
            ->distinct()
            ->findAll();

        // Ambil dari GET
        $selectedProduk = $this->request->getGet('jenis_produk');


        // Jika belum pilih produk → hanya tampilkan form
        if (!$selectedProduk) {
            echo view('haladmin/template/header');
            echo view('haladmin/index', [
                'kriteria' => $kriteria,
                'alternatif' => [],
                'matrix' => [],
                'maxValue' => [],
                'minValue' => [],
                'normalisasi' => [],
                'nilai_preferensi' => [],
                'jenisProduk' => $jenisProduk,
                'selectedProduk' => null
            ]);
            echo view('haladmin/template/footer');
            return;
        }

        // Ambil supplier berdasarkan jenis produk
        $alternatif = $suplierModel
            ->where('jenis_produk', $selectedProduk)
            ->findAll();




        // Ambil matrix dalam bentuk [alt][cri]
        $matrixData = [];
        foreach ($alternatif as $alt) {
            foreach ($kriteria as $cri) {
                foreach ($matrix as $m) {
                    if ($m['kode_suplier'] == $alt['kode_suplier'] && $m['kode_kriteria'] == $cri['kode_kriteria']) {
                        $matrixData[$alt['kode_suplier']][$cri['kode_kriteria']] = $m['nilai'];
                    }
                }
            }
        }
        // Hitung max/min per kriteria
        $maxValue = [];
        $minValue = [];

        foreach ($kriteria as $cri) {
            $temp = [];
            foreach ($alternatif as $alt) {
                $temp[] = $matrixData[$alt['kode_suplier']][$cri['kode_kriteria']];
            }
            $maxValue[$cri['kode_kriteria']] = max($temp);
            $minValue[$cri['kode_kriteria']] = min($temp);
        }

        //Menghitung Normalisasi
        $normalisasi = [];
        foreach ($alternatif as $alt) {
            foreach ($kriteria as $cri) {


                $x = $matrixData[$alt['kode_suplier']][$cri['kode_kriteria']];
                $min = $minValue[$cri['kode_kriteria']];
                $max = $maxValue[$cri['kode_kriteria']];

                if ($cri['jenis'] === "cost") {
                    $normalisasi[$alt['kode_suplier']][$cri['kode_kriteria']] = ($min / $x);;
                } else if ($cri['jenis'] === "benefit") {
                    $normalisasi[$alt['kode_suplier']][$cri['kode_kriteria']] = ($x / $max);;
                }
            }
        }

        // Menghitung Nilai Preferensi 
        $preferensi = [];

        foreach ($alternatif as $alt) {
            $U = 0;
            foreach ($kriteria as $cri) {
                $bobot = $cri['bobot'] / 100; // konversi persen ke desimal
                $U += $bobot * $normalisasi[$alt['kode_suplier']][$cri['kode_kriteria']];
            }
            $preferensi[$alt['kode_suplier']] = $U;
        }

        echo view('haladmin/template/header');
        // echo view('haladmin/index');
        echo view('haladmin/index', [
            'kriteria'     => $kriteria,
            'alternatif' => $alternatif,
            'matrix'       => $matrixData,
            'maxValue'     => $maxValue,
            'minValue'     => $minValue,
            'normalisasi'  => $normalisasi,
            'nilai_preferensi' => $preferensi,
            'selectedProduk' => $selectedProduk,
            'jenisProduk' => $jenisProduk
        ]);
        echo view('haladmin/template/footer');
    }
    public function kriteria()
    {
        $data['kriteria'] = $this->KriteriaModel->getKriteria();
        echo view('haladmin/template/header');
        echo view('haladmin/data/kriteria/index', $data);
        echo view('haladmin/template/footer');
    }
    public function suplier()
    {
        $data['suplier'] = $this->SuplierModel->getSuplier();
        echo view('haladmin/template/header');
        echo view('haladmin/data/suplier/index', $data);
        echo view('haladmin/template/footer');
    }
}
