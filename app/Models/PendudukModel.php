<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table = 'penduduk';
    protected $useTimestamps = false;

    protected $allowedFields = ['nama','tgl_lahir','jenkel','usia','agama','alamat','foto'];

    public function getPenduduk($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();
    }

    public function jumlahdata()
    {
        $this->table('penduduk');
        return $this->table('penduduk')->countAll();
    }

    public function lakilaki()
    {
        $this->table('penduduk');
        return $this->table('penduduk')->like('jenkel','Laki-laki')->countAllResults();
    }
    public function perempuan()
    {
        $this->table('penduduk');
        return $this->table('penduduk')->like('jenkel','Perempuan')->countAllResults();
    }

    public function search ($cari)
    {
        return $this->table('penduduk')->like('nama', $cari)->orlike('alamat', $cari);
    }
}