<?php
namespace App\Controllers;

use App\Models\PendudukModel;

class Penduduk extends BaseController
{
    protected $pendudukModel;
    public function __construct()
    {
        $this->pendudukModel = new PendudukModel();
    }
    
    public function save()
    {
        // Menambahkan Validasi Input
        if (!$this-> validate([
            'nama'      =>'required|is_unique[penduduk.nama]',
            'tgl_lahir' =>'required[penduduk.tgl_lahir]',
            'jenkel'    =>'required[penduduk.jenkel]',
            'usia'      =>'required[penduduk.usia]',
            'agama'     =>'required[penduduk.agama]',
            'alamat'    =>'required[[penduduk.alamat]',
            'foto'      =>'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]'
        ])) {
            return redirect()->to('/dashboard/create')->withInput();
        }

        // Mengambil file foto
        $fileFoto = $this->request->getFile('foto');

        // Apakah ada gambar yang diupload ?
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {
        // Ambil nama random
            $namaFoto = $fileFoto->getRandomName();
        // Pindahkan file ke folder img
            $fileFoto->move('profile', $namaFoto);
        }

        // Menyimpan data
        $this->pendudukModel->save(
            [
                'nama'      => $this->request->getVar('nama'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                'jenkel'    => $this->request->getVar('jenkel'),
                'usia'      => $this->request->getVar('usia'),
                'agama'     => $this->request->getVar('agama'),
                'alamat'    => $this->request->getVar('alamat'),
                'foto'      => $namaFoto
            ]);
            session()->setFlashdata('pesan','Data berhasil ditambahkan');
            return redirect()->to("dashboard/datapenduduk");
    }

    public function update($id)
    {
        // Apabila nama tidak diubah
        $namaLama = $this->pendudukModel->getPenduduk($this->request->getVar('id'));
        if ($namaLama['nama'] ==  $this->request->getVar('nama')) {
            $rule_nama = 'required';
        }else {
            $rule_nama = 'required|is_unique[penduduk.nama]';
        }
        // Membuat validasi input
        if (!$this->validate([
            'nama'      =>$rule_nama,
            'tgl_lahir' =>'required[penduduk.tgl_lahir]',
            'jenkel'    =>'required[penduduk.jenkel]',
            'usia'      =>'required[penduduk.usia]',
            'agama'     =>'required[penduduk.agama]',
            'alamat'    =>'required[[penduduk.alamat]',
            'foto'      =>'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]'
        ])) {
            return redirect()->to('/dashboard/edit/'. $this->request->getVar('id'))->withInput();
        }
        // Menangkap foto
        $fileFoto = $this->request->getFile('foto');

        // cek gambar, apakah tetap gambar lama
        if ($fileFoto->getError()==4) {
            $namaFoto = $this->request->getVar('fotoLama');
        }else{
            // Generate nama foto random
            $namaFoto = $fileFoto->getRandomName();
            // Pindahkan foto
            $fileFoto->move('profile', $namaFoto);
            // Hapus file foto lama
            unlink('profile/'. $this->request->getVar('fotoLama'));
        }

        $this->pendudukModel->save([
            'id'            => $id,
            'nama'          => $this->request->getVar('nama'),
            'tgl_lahir'     => $this->request->getVar('tgl_lahir'),
            'jenkel'        => $this->request->getVar('jenkel'),
            'usia'          => $this->request->getVar('usia'),
            'agama'         => $this->request->getVar('agama'),
            'alamat'        => $this->request->getVar('alamat'),
            'foto'          => $namaFoto
        ]);
        session()->setFlashdata('pesan','Data berhasil di update');
        return redirect()->to('/dashboard/datapenduduk');
    }

    public function delete($id)
    {
        // Cari data berdasarkan id
        $penduduk = $this->pendudukModel->find($id);
        // Cek jika file gambarnya default
        if ($penduduk['foto']!='default.jpg') {
        // jangan hapus gambar
        unlink('profile/'.$penduduk['foto']);
        }
        $this->pendudukModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/dashboard');
    }
}