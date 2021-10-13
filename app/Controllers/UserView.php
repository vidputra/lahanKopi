<?php

namespace App\Controllers;

class UserView extends BaseController
{
    public function index()
    {
        $data['data'] = $this->md->findAll();
        echo view('header');
        echo view('user_view', $data);
        echo view('footer');
    }
}