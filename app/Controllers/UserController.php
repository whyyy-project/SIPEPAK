<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BagianModel;
use App\Models\BagianAtasanModel;

class UserController extends BaseController
{
    protected $bidangModel;
    protected $bidangAtasanModel;

    public function __construct()
    {
        $this->bidangModel = new BagianModel();
        $this->bidangAtasanModel = new BagianAtasanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengajuan | User'
        ];
        return view('layouts/user/dashboard', $data);
    }
    public function mengajukan()
    {
        $data = [
            'title'   => 'Pengajuan | User',
            'section' => $this->bidangModel->getData()
        ];
        // return view('template/template');
        return view('layouts/user/mengajukan', $data);
    }
    public function isiForm($slug)
    {
        $data = [
            'title'  => 'Form Pengajuan | User',
            'slug'   => $slug,
            'atasan' => $this->bidangAtasanModel->getDataBySlug($slug),
            'bidang' => $this->bidangAtasanModel->getBidang($slug),
            'message' => 'Data Bidang atau Atasan ' . $slug . ' Tidak Ditemukan'
        ];
        if ($this->bidangAtasanModel->getDataBySlug($slug) == null) {
            return view('errors/html/error_404', $data);
        }
        return view('layouts/user/formPengajuan', $data);
    }
}
