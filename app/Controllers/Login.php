<?php

namespace App\Controllers;

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
}