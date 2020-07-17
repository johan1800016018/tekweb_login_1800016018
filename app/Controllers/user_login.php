<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\User_model;

class User_login extends Controller
{
    public function index()
    {
        $model = new User_model();
        $data['user'] = $model->getUser()->getResult();
        echo view('/user_view', $data);
    }
    public function save()
    {
        $model = new User_model();
        $data = array(
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        );
        $model->saveUser($data);
        return redirect()->to(base_url('user_login'));
    }
    public function update()
    {
        $model = new User_model();
        $id = $this->request->getPost('firstname');
        $data = array(
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        );
        $model->updateUser($data, $id);
        return redirect()->to(base_url('user_login'));
    }
    public function delete()
    {
        $model = new User_model();
        $id = $this->request->getPost('firstname');
        $model->deleteUser($id);
        return redirect()->to(base_url('user_login')); 
    }
}
