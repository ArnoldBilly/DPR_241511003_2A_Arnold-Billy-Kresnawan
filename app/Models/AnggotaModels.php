<?php

namespace App\Models;
use CodeIgniter\Model;

class AnggotaModels extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $allowedFields = ['nama_depan', 'nama_belakang', 'gelar_depan', 'gelar_belakang', 'jabatan', 'status_pernikahan'];

    public function getAllAnggota()
    {
        return $this->findAll();
    }
}