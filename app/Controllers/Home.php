<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('template/cover');
    }
    public function dashboard()
    {
        return view('template/template');
    }
}