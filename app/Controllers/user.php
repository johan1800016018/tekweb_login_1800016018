<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_user;

class user extends Controller
{

    public function index(){
        $data =[
            'title' => 'Form Login',
            'tampil' => 'login',
        ];
        echo view('templates/wrapper', $data);
    }

    public function register(){
        $data =[
            'title' => 'Form Register',
            'tampil' => 'register',
        ];
        echo view('templates/wrapper', $data);
    }

    public function regis(){
        helper(['form', 'url', 'date']);

        $userModel = new M_user();
        
        $now = date('Y-m-d H:i:s');
        
        $data = [
            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'date_update' => $now
        ];

        $save = $userModel->insert($data);
        $session = session();
        session()->setFlashdata('message', 'selamat registrasi anda berhasil!');
        return redirect() -> to(base_url('user'));
    }
    

    
}