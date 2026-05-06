<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'meta_title'   => 'Home Page',
            'meta_desc'    => 'Welcome to our website',
            'meta_keyword' => 'home, website'
        ];

        return view('components/header', $data)
            . view('pages/index', $data)
            . view('components/footer', $data);
    }
}
