<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        $data['data'] = $this->md->findAll();
        return view('auth/login', $data);
    }

    function FormAdmin()
    {
        // return view('add_user');
        echo view('header');
        echo view('auth/add_admin');
        echo view('footer');
    }

    function FormEditAdmin($kd)
    {
        $data['data'] = $this->lmd->find($kd);
        // return view('add_user');
        echo view('header');
        echo view('auth/edit_admin', $data);
        echo view('footer');
    }

    function AdminView()
    {
        $data['data'] = $this->lmd->findAll();
        // return view('add_user');
        echo view('header');
        echo view('auth/admin_table', $data);
        echo view('footer');
    }

    function View()
    {
        $data['data'] = $this->lmd->findAll();
        // return view('add_user');
        echo view('header');
        echo view('auth/admin_view', $data);
        echo view('footer');
    }

    //Proses
    function AddAdmin()
    {
        $this->lmd->insert($this->request->getPost());
        return redirect()->to(base_url('Login/AdminView'));
    }

    //Proses
    function Edit($kd)
    {
        $this->lmd->update($kd, $this->request->getPost());
        return redirect()->to(base_url('Login/AdminView'));
    }

    //Proses
    function Delete($kd)
    {
        $this->lmd->delete($kd);
        return redirect()->to(base_url('Login/AdminView'));
    }


    public function process()
    {
        $users = new LoginModel();
        $username = $this->request->getVar('uname');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('Login'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
