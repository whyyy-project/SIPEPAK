<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BagianModel;
use App\Models\BagianAtasanModel;

class UserController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengajuan | User'
        ];
        return view('layouts/user/dashboard', $data);
    }
    public function mengajukan()
    {
        $dataModel = new BagianModel();
        $data = [
            'title'   => 'Pengajuan | User',
            'section' => $dataModel->getData()
        ];
        // return view('template/template');
        return view('layouts/user/mengajukan', $data);
    }
    public function isiForm($slug)
    {
        $dataModel = new BagianAtasanModel();
        $data = [
            'title'  => 'Form Pengajuan | User',
            'atasan' => $dataModel->getDataBySlug($slug),
            'bidang' => $dataModel->getBidang($slug)
        ];
        // return view('template/template');
        return view('layouts/user/formPengajuan', $data);
    }
}