<?php 
namespace App\Controllers;

// use CodeIgniter\Controller;
use App\Models\PendudukModel;
use CodeIgniter\HTTP\Request;

class Pimpinan extends BaseController{

    protected $pendudukModel;
    public function __construct()
    {
      $this->pendudukModel = new PendudukModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Pimpinan',
            'totalpenduduk' => $this->pendudukModel->jumlahdata(),
            'lakilaki' => $this->pendudukModel->lakilaki(),
            'perempuan' => $this->pendudukModel->perempuan()
        ];
            return view('pimpinan/index',$data);
    }

    public function laporandata()
    {
        $cari = $this->request->getVar('cari');
        if ($cari) {
            $penduduk = $this->pendudukModel->search($cari);
        } else {
            $penduduk = $this->pendudukModel;
        }
        
        // $datalakilaki = $this->request->getUri('Laki-laki');
        // if ($datalakilaki) {
        //     $penduduk = $this->pendudukModel->datalakilaki($jenkel = 'Laki-laki');
        // } else {
        //     $penduduk = $this->pendudukModel;
        // }

        // $dataperempuan = $this->request->getUri('perempuan');
        // if ($dataperempuan) {
        //     $penduduk = $this->pendudukModel->dataperempuan($jenkel = 'Perempuan');
        // } else {
        //     $penduduk = $this->pendudukModel;
        // }
        
        $currentPage = $this-> request->getVar('page_penduduk') ? $this-> request-> getVar('page_penduduk') : 1;
        $data = [
            'title'         => 'Data Penduduk',
            'penduduk'      => $this->pendudukModel->paginate(5,'penduduk'),
            'pager'         => $this->pendudukModel->pager,
            'currentPage'   => $currentPage
        ];
        return view('pimpinan/laporandata',$data);
    }

    public function lapdatalaki()
    {
        $cari = $this->request->getVar('cari');
        if ($cari) {
            $penduduk = $this->pendudukModel->search($cari);
        } else {
            $penduduk = $this->pendudukModel;
        }
        
        $datalakilaki = $this->request->getUri('Laki-laki');
        if ($datalakilaki) {
            $penduduk = $this->pendudukModel->datalakilaki($jenkel = 'Laki-laki');
        } else {
            $penduduk = $this->pendudukModel;
        }
        
        $currentPage = $this-> request->getVar('page_penduduk') ? $this-> request-> getVar('page_penduduk') : 1;
        $data = [
            'title'         => 'Data Penduduk',
            'penduduk'      => $this->pendudukModel->paginate(5, 'penduduk'),
            'pager'         => $this->pendudukModel->pager,
            'currentPage'   => $currentPage
        ];
        return view('pimpinan/laporandata',$data);
    }
    
    public function lapdataperempuan()
    {
        $cari = $this->request->getVar('cari');
        if ($cari) {
            $penduduk = $this->pendudukModel->search($cari);
        } else {
            $penduduk = $this->pendudukModel;
        }
        
        $dataperempuan = $this->request->getUri('perempuan');
        if ($dataperempuan) {
            $penduduk = $this->pendudukModel->dataperempuan($jenkel = 'Perempuan');
        } else {
            $penduduk = $this->pendudukModel;
        }
        
        $currentPage = $this-> request->getVar('page_penduduk') ? $this-> request-> getVar('page_penduduk') : 1;
        $data = [
            'title'         => 'Data Penduduk',
            'penduduk'      => $this->pendudukModel->paginate(5, 'penduduk'),
            'pager'         => $this->pendudukModel->pager,
            'currentPage'   => $currentPage
        ];
        return view('pimpinan/laporandata',$data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Laporan Data',
            'penduduk' => $this->pendudukModel->getPenduduk($id)
        ];
        return view('pimpinan/detail',$data);
    }
}