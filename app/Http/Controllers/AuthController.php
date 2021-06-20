<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('portal.pages.login');
    }

    public function postLogin(Request $request)
    {
        dd('Anda Berhasil Masuk');
    }

    public function getRegister()
    {
        return view('portal.pages.daftar');
    }

    public function postRegister(Request $request)
    {
        dd('Anda Berhasil Mendaftar');
    }

}
