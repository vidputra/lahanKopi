<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('user_view');
        return redirect()->to(base_url('UserView'));
    }
}
