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

    public function input()
    {
        $data = [
            'title' => 'Input Komponen Gaji',
            'content' => view('inputkomponengaji')
        ];

        return view('admin', $data);
    }

    public function store()
    {
        $model = new KomponenGajiModels();

        $data = [
            'nama_komponen' => $this->request->getPost('nama_komponen'),
            'kategori' => $this->request->getPost('kategori'),
            'jabatan' => $this->request->getPost('jabatan'),
            'nominal' => $this->request->getPost('nominal'),
            'satuan' => $this->request->getPost('satuan'),
        ];

        $model->insert($data);
        return redirect()->to('/admin/komponengaji');
    }

    public function edit($id_komponen_gaji)
    {
        $model = new KomponenGajiModels();
        $komponen = $model->find($id_komponen_gaji);

        $data = [
            'title' => 'Edit Komponen Gaji',
            'content' => view('editkomponengaji', ['komponen' => $komponen]),
        ];

        return view('admin', $data);
    }

    public function update($id_komponen_gaji)
    {
        $model = new KomponenGajiModels();

        $data = [
            'nama_komponen' => $this->request->getPost('nama_komponen'),
            'kategori' => $this->request->getPost('kategori'),
            'jabatan' => $this->request->getPost('jabatan'),
            'nominal' => $this->request->getPost('nominal'),
            'satuan' => $this->request->getPost('satuan'),
        ];

        $model->update($id_komponen_gaji, $data);
        return redirect()->to('/admin/komponengaji');
    }

    public function delete($id_komponen_gaji)
    {
        $model = new KomponenGajiModels();
        $model->delete($id_komponen_gaji);
        return redirect()->to('/admin/komponengaji');
    }
}