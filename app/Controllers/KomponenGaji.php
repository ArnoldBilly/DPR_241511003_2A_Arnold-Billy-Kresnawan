<?php

namespace App\Controllers;
use App\Models\KomponenGajiModels;

class KomponenGaji extends BaseController
{
    public function index()
    {
        $model = new KomponenGajiModels();
        $data = [
            'title' => 'Komponen Gaji',
            'content' => view('komponengaji', ['komponen' => $model->getAllKomponen()]),
        ];

        return view('admin', $data);
    }

    public function details($id_komponen_gaji)
    {
        $model = new KomponenGajiModels();
        $komponen = $model->find($id_komponen_gaji);

        $data = [
            'title' => 'Detail Komponen Gaji',
            'content' => view('detailkomponengaji', ['komponen' => $komponen]),
        ];

        return view('admin', $data);
    }
}