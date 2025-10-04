<?php

namespace App\Controllers;

use App\Models\PenggajianModels;
use App\Models\AnggotaModels;
use App\Models\KomponenGajiModels;

class Penggajian extends BaseController
{
    public function index()
    {
        $model = new PenggajianModels();
        $data = [
            'title' => 'Penggajian DPR',
            'content' => view('penggajian', ['penggajian' => $model->getDataPenggajianAll()])
        ];

        return view('admin', $data);
    }

    public function input($id_anggota)
    {
        $anggotaModel = new AnggotaModels();
        $komponenModel = new KomponenGajiModels();

        // Ambil data anggota
        $anggota = $anggotaModel->find($id_anggota);

        // Ambil komponen sesuai jabatan (atau yang berlaku untuk semua)
        $komponen = $komponenModel
            ->where('jabatan', $anggota['jabatan'])
            ->orWhere('jabatan', 'Semua')
            ->findAll();

        $data = [
            'title' => 'Input Penggajian',
            'content' => view('inputpenggajian', [
                'anggota' => $anggota,
                'komponen' => $komponen
            ])
        ];
        return view('admin', $data);
    }

    public function save()
    {
        $penggajianModel = new PenggajianModels();

        $anggotaId = $this->request->getPost('id_anggota');
        $komponenId = $this->request->getPost('id_komponen_gaji');

        // cek duplikat
        $sudahAda = $penggajianModel
            ->where('id_anggota', $anggotaId)
            ->where('id_komponen_gaji', $komponenId)
            ->countAllResults();

        if ($sudahAda > 0) {
            return redirect()->back()->with('error', 'Komponen gaji ini sudah pernah diberikan ke anggota tersebut');
        }

        // insert
        $penggajianModel->insert([
            'id_anggota' => $anggotaId,
            'id_komponen_gaji' => $komponenId
        ]);

        return redirect()->to('/admin/datapenggajian')->with('success', 'Data penggajian berhasil disimpan');
    }

    public function edit($id_anggota)
    {
        $anggotaModel = new AnggotaModels();
        $penggajianModel = new PenggajianModels();
        $komponenModel = new KomponenGajiModels();

        // Ambil data anggota
        $anggota = $anggotaModel->find($id_anggota);

        // Ambil komponen gaji yang sudah diambil
        $komponenDiambil = $penggajianModel
            ->where('id_anggota', $id_anggota)
            ->findAll();

        // Ambil detail komponen gaji
        $komponenDetail = [];
        foreach ($komponenDiambil as $item) {
            $komponen = $komponenModel->find($item['id_komponen_gaji']);
            if ($komponen) {
                $komponenDetail[] = $komponen;
            }
        }

        // Ambil semua komponen gaji yang tersedia untuk dropdown
        $semuaKomponen = $komponenModel->findAll();

        $data = [
            'title' => 'Edit Penggajian',
            'content' => view('editpenggajian', [
                'anggota' => $anggota,
                'komponenDiambil' => $komponenDetail,
                'semuaKomponen' => $semuaKomponen
            ])
        ];
        return view('admin', $data);
    }

    public function update()
    {
        $penggajianModel = new PenggajianModels();

        $anggotaId = $this->request->getPost('id_anggota');
        $komponenId = $this->request->getPost('id_komponen_gaji');

        // cek duplikat
        $sudahAda = $penggajianModel
            ->where('id_anggota', $anggotaId)
            ->where('id_komponen_gaji', $komponenId)
            ->countAllResults();

        if ($sudahAda > 0) {
            return redirect()->back()->with('error', 'Komponen gaji ini sudah pernah diberikan ke anggota tersebut');
        }

        // insert
        $penggajianModel->insert([
            'id_anggota' => $anggotaId,
            'id_komponen_gaji' => $komponenId
        ]);

        return redirect()->to('/admin/datapenggajian')->with('success', 'Data penggajian berhasil diupdate');
    }

    public function details($id_anggota)
    {
        $anggotaModel = new AnggotaModels();
        $penggajianModel = new PenggajianModels();
        $komponenModel = new KomponenGajiModels();

        // Ambil data anggota
        $anggota = $anggotaModel->find($id_anggota);

        // Ambil komponen gaji yang sudah diambil
        $komponenDiambil = $penggajianModel
            ->where('id_anggota', $id_anggota)
            ->findAll();

        // Ambil detail komponen gaji
        $komponenDetail = [];
        foreach ($komponenDiambil as $item) {
            $komponen = $komponenModel->find($item['id_komponen_gaji']);
            if ($komponen) {
                $komponenDetail[] = $komponen;
            }
        }

        $data = [
            'title' => 'Detail Penggajian',
            'content' => view('detailpenggajian', [
                'anggota' => $anggota,
                'komponen' => $komponenDetail
            ])
        ];
        return view('admin', $data);
    }

    public function deleteKomponen($id_anggota, $id_komponen_gaji)
    {
        $penggajianModel = new PenggajianModels();

        // Cari data yang sesuai
        $komponen = $penggajianModel
            ->where('id_anggota', $id_anggota)
            ->where('id_komponen_gaji', $id_komponen_gaji)
            ->first();

        if ($komponen) {
            // Hapus data
            $penggajianModel
                ->where('id_anggota', $id_anggota)
                ->where('id_komponen_gaji', $id_komponen_gaji)
                ->delete();

            return redirect()->to('/admin/penggajian/edit/'.$id_anggota)
                ->with('success', 'Komponen gaji berhasil dihapus.');
        } else {
            return redirect()->to('/admin/penggajian/edit/'.$id_anggota)
                ->with('error', 'Komponen gaji tidak ditemukan.');
        }
    }

}