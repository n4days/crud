<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function sapa()
    {
        return view('sapa');
    }

    public function hasilsapa()
    {
        echo 'Nama yang diinput : ' . $this->request->getVar('nama');
    }
    
    // Inputan
    public function login()
    {
        return view('login');
    }

    // Outputan
    public function nlogin()
    {
        return view('nlogin');
    }

    public function saya($nama = 'irsyad', $umur = 23)
    {
        echo 'Nama saya : ' . $nama . ' Umur : ' . $umur;
    }
}
