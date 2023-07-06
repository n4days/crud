<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function saya($nama = 'irsyad', $umur = 23)
    {
        echo ('Nama saya : ' . $nama . ' Umur : ' . $umur);
    }
}
