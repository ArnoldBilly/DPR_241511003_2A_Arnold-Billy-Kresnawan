<?php

namespace App\Controllers;
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

    public function details($id_anggota)
    {
        $model = new AnggotaModels();
        $anggota = $model->find($id_anggota);

        $data = [
            'title' => 'Detail Anggota DPR',
            'content' => view('detailanggota', ['anggota' => $anggota]),
        ];

        return view('admin', $data);
    }

    public function store()
    {
        $model = new AnggotaModels();

        // Menangkap data dari form
        $data = [
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status_pernikahan' => $this->request->getPost('status'),
        ];

        // Menyimpan data ke database
        $model->insert($data);
        return redirect()->to('/admin');
    }

    public function edit($id_anggota)
    {
        $model = new AnggotaModels();
        $anggota = $model->find($id_anggota);

        $data = [
            'title' => 'Edit Anggota DPR',
            'content' => view('adminedit', ['anggota' => $anggota]),
        ];

        return view('admin', $data);
    }

    public function update($id_anggota)
    {
        $model = new AnggotaModels();

        // Menangkap data dari form
        $data = [
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status_pernikahan' => $this->request->getPost('status'),
        ];

        $model->update($id_anggota, $data);
        return redirect()->to('/admin');
    }

    public function komponengaji()
    {
        $data = [
            'title' => 'Komponen Gaji',
            'content' => 'Isi komponen gaji disini'
        ];

        return view('admin', $data);
    }

    public function datapenggajian()
    {
        $data = [
            'title' => 'Data Penggajian',
            'content' => 'Isi data penggajian disini'
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