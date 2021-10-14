<?php

namespace App\Controllers;

class UserPemetaan extends BaseController
{
    public function index()
    {
        $data['data'] = $this->md->findAll();
        echo view('header');
        echo view('user_pemetaan', $data);
        echo view('footer');
    }

    function AboutUs()
    {
        // return view('add_user');
        echo view('header');
        echo view('about_us');
        echo view('footer');
    }

    //Form
    function FormAdd()
    {
        // return view('add_user');
        echo view('header');
        echo view('add_user');
        echo view('footer');
    }

    //Form
    function FormEdit($kd)
    {
        $data['data'] = $this->md->find($kd);
        echo view('header');
        echo view('edit_user', $data);
        echo view('footer');
    }

    //Proses
    function Add()
    {
        $this->md->insert($this->request->getPost());
        return redirect()->to(base_url('UserPemetaan'));
    }

    //Proses
    function Edit($kd)
    {
        $this->md->update($kd, $this->request->getPost());
        return redirect()->to(base_url('UserPemetaan'));
    }

    //Proses
    function Delete($kd)
    {
        $this->md->delete($kd);
        return redirect()->to(base_url('UserPemetaan'));
    }
}
