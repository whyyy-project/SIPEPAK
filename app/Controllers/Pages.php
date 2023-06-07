<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use CodeIgniter\HTTP\RedirectResponse;


class Pages extends BaseController
{
    public function index()
    {
        if (logged_in(true)) {
            return redirect()->to('/dashboard');
        } else {
            $data = [
                'title' => 'Welcome to SIPEPAK'
            ];
            return view('layouts/public/cover', $data);
        }
    }


    public function dashboard()
    {
        if (in_groups('admin')) {
            $data = [
                'title' => 'Dashboard | Admin'
            ];
            return view('layouts/user/dashboard', $data);
        } else if (in_groups('atasan')) {
            $data = [
                'title' => 'Dashboard | Atasan'
            ];
            return view('layouts/atasan/dashboard', $data);
        } else {
            $data = [
                'title' => 'Dashboard | User'
            ];
            return view('layouts/user/dashboard', $data);
        }
    }
}
