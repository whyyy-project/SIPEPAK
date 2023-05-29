<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
        $data = [
            'title'   => 'Pengajuan | User',
            'section' => [
                'bagian 1',
                'bagian 163',
                'bagian 14',
                'bagian 14',
                'bagian 2'
            ]
        ];
        // return view('template/template');
        return view('layouts/user/mengajukan', $data);
    }
}