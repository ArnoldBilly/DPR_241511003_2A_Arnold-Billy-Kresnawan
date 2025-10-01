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
    public function delete($id_anggota)
    {
        $model = new AnggotaModels();
        $model->delete($id_anggota);
        return redirect()->to('/admin');
    }
}