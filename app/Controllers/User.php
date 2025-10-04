<?php

namespace App\Controllers;
use App\Models\AnggotaModels;
use App\Models\PenggajianModels;
use App\Models\KomponenGajiModels;

class User extends BaseController
{
    public function dashboard(): string
    {
        $data = [
            'title' => 'Dashboard User',
            'content' => 'Testing'
        ];
        return view('user', $data);
    }

    public function lihatdata(){
        $model = new AnggotaModels();
        $data = [
            'title' => 'Dashboard User',
            'content' => view('dashboarduser', ['anggota' => $model->getAllAnggota()]),
        ];

        return view('user', $data);
    }

    public function lihatdatadetails($id_anggota){
        $model = new AnggotaModels();
        $anggota = $model->find($id_anggota);

        $data = [
            'title' => 'Detail Anggota DPR',
            'content' => view('detailanggotauser', ['anggota' => $anggota]),
        ];

        return view('user', $data);
    }

    public function lihatpenggajian()
    {
        $model = new PenggajianModels();
        $data = [
            'title' => 'Penggajian DPR',
            'content' => view('penggajianuser', ['penggajian' => $model->getDataPenggajianAll()])
        ];

        return view('user', $data);
    }

    public function penggajiandetails($id_anggota)
    {
        $anggotaModel = new AnggotaModels();
        $penggajianModel = new PenggajianModels();
        $komponenModel = new KomponenGajiModels();

        $anggota = $anggotaModel->find($id_anggota);

        $komponenDiambil = $penggajianModel
            ->where('id_anggota', $id_anggota)
            ->findAll();

        $komponenDetail = [];
        foreach ($komponenDiambil as $item) {
            $komponen = $komponenModel->find($item['id_komponen_gaji']);
            if ($komponen) {
                $komponenDetail[] = $komponen;
            }
        }

        $data = [
            'title' => 'Detail Penggajian',
            'content' => view('detailpenggajianuser', [
                'anggota' => $anggota,
                'komponen' => $komponenDetail
            ])
        ];
        return view('user', $data);
    }
}