<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to SIPEPAK'
        ];
        return view('layouts/public/cover', $data);
    }
    public function loginPage()
    {
        $data = [
'title' => 'SIPEPAK | Login Page'
        ];
        return view('layouts/public/login', $data);
    }
}