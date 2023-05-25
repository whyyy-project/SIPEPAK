<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        // return view('template/template');
        return view('layouts/user/dashboard');
    }
}