<?php

namespace App\Models;
use CodeIgniter\Model;

class PenggajianModels extends Model 
{
    protected $table = 'penggajian';
    protected $primaryKey = false;
    protected $allowedFields = ['id_komponen_gaji', 'id_anggota'];

    public function getDataPenggajianAll()
    {
        return $this->db->table('anggota a')
            ->select("
                a.id_anggota,
                CONCAT(
                    COALESCE(a.gelar_depan, ''), ' ',
                    a.nama_depan, ' ',
                    a.nama_belakang, ' ',
                    COALESCE(a.gelar_belakang, '')
                ) AS nama,
                SUM(k.nominal) AS take_home_pay
            ")
            ->join('penggajian p', 'a.id_anggota = p.id_anggota', 'left') // penting: LEFT JOIN
            ->join('komponen_gaji k', 'k.id_komponen_gaji = p.id_komponen_gaji', 'left')
            ->groupBy('a.id_anggota')
            ->get()
            ->getResultArray();
    }
}