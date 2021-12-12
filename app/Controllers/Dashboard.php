<?php
namespace App\Controllers;

use App\Models\PendudukModel;
use CodeIgniter\HTTP\Request;

class Dashboard extends BaseController
{
    protected $pendudukModel;
    public function __construct()
    {
        $this->pendudukModel = new PendudukModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Admin',
            'totalpenduduk' => $this->pendudukModel->jumlahdata(),
            'lakilaki' => $this->pendudukModel->lakilaki(),
            'perempuan' => $this->pendudukModel->perempuan()
        ];
        return view('dashboard/index', $data);
    }

    public function datapenduduk()
    {
        $cari = $this->request->getVar('cari');
        if ($cari) {
            $penduduk = $this->pendudukModel->search($cari);
        } else {
            $penduduk = $this->pendudukModel;
        }
        $currentPage = $this-> request->getVar('page_penduduk') ? $this-> request-> getVar('page_penduduk') : 1;
        
        $data = [
            'title' => 'Data penduduk',
            'penduduk' => $this->pendudukModel->paginate(5,'penduduk'),
            'pager'    => $this->pendudukModel->pager,
            'currentPage' => $currentPage
        ];
        return view('dashboard/datapenduduk', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Insert data',
            'validation' => $validation = \Config\Services::validation()
        ];
        return view('dashboard/create', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail penduduk',
            'penduduk' => $this->pendudukModel->getPenduduk($id)
        ];
        return view('dashboard/detail', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit data',
            'validation' => $validation = \Config\Services::validation(),
            'penduduk' => $this->pendudukModel->getPenduduk($id)
        ];
        return view('dashboard/edit', $data);
    }
}