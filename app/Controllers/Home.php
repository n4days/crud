<?php

namespace App\Controllers;
use App\Models\User;

class Home extends BaseController
{
    protected $userModel;

    public function __construct(){
        $this->userModel=new User();
    }


    public function index()
    {
        $data = $this->userModel->findAll();

        $nama = [
            "pertama" => "irsyad",
            "user" => $data
        ];
        // dd($nama);
        return view('welcome', $nama);
    }

    public function simpanUser()
    {
        // dd($_POST);

        $dataInsert = [
            'nama' => $this->request->getVar('nama'),
            'hp' => $this->request->getVar('noHp'),
            'alamat' => $this->request->getVar('alamat'),
        ];

        if ($this->userModel->insert($dataInsert)) {
            session()->setFlashdata('success','Data Berhasil Disimpan');
            return redirect()->to('/');
        }

        // $this->userModel->insert($dataInsert);
        // return redirect()->to('/');
    }

    public function deleteUser($id)
    {
        if ($this->userModel->delete($id)) {
            session()->setFlashdata('success','Data Berhasil Dihapus');
            return redirect()->to('/');
        }
    }

    // public function sapa()
    // {
    //     return view('sapa');
    // }

    // public function hasilsapa()
    // {
    //     echo 'Nama yang diinput : ' . $this->request->getVar('nama');
    // }
    
    // // Inputan
    // public function login()
    // {
    //     return view('login');
    // }

    // // Outputan
    // public function nlogin()
    // {
    //     return view('nlogin');
    // }

    // public function saya($nama = 'irsyad', $umur = 23)
    // {
    //     echo 'Nama saya : ' . $nama . ' Umur : ' . $umur;
    // }
}
