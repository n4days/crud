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

    public function saya($nama = 'irsyad', $umur = 23)
    {
        echo 'Nama saya : ' . $nama . ' Umur : ' . $umur;
    }
}
