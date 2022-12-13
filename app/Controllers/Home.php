<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Homepage"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/topbar', $data);
        echo view('layouts/sidebar', $data);
        echo view('layouts/footer');
    }
}
