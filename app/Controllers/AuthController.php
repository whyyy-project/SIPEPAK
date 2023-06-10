<?php

namespace App\Controllers;

use Myth\Auth\Controllers\AuthController as MythAuthController;

class AuthController extends MythAuthController
{
    protected $redirectTo = '/dashboard';
    public function login()
    {
        return view('layouts/public/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function forgotPassword()
    {
        return view('layouts/public/forgot-password');
    }

    public function attemptForgot()
    {
        // Logika untuk mengirim email lupa password
    }

    public function resetPassword($token = null)
    {
        return view('auth/reset', ['token' => $token]);
    }

    public function attemptReset()
    {
        // Logika untuk mengatur ulang password
    }

    public function activateAccount($token = null)
    {
        return view('auth/verify', ['token' => $token]);
    }

    public function attemptActivate()
    {
        // Logika untuk mengaktifkan akun
    }
}
