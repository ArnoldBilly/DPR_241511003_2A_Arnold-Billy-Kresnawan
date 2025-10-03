<?php

namespace App\Controllers;
use App\Models\UserModels;
use App\Models\AnggotaModels;

class Admin extends BaseController
{
    public function index()
    {
        $model = new AnggotaModels();
        $data = [
            'title' => 'Dashboard Admin',
            'content' => view('dashboardadmin', ['anggota' => $model->getAllAnggota()]),
        ];

        return view('admin', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Input Anggota DPR',
            'content' => view('inputanggota'),
        ];

        return view('admin', $data);
    }

    public function store()
    {
        $model = new AnggotaModels();

        $data = [
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status_pernikahan' => $this->request->getPost('status'),
        ];

        $model->insert($data);
        return redirect()->to('/admin');
    }
    
    public function delete($id_anggota)
    {
        $model = new AnggotaModels();
        $model->delete($id_anggota);
        return redirect()->to('/admin');
    }
}