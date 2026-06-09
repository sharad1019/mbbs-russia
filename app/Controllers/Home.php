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
        public function kleido(): string
        {
            $data = [
                'meta_title'   => 'Kleido Page',
                'meta_desc'    => 'Welcome to the Kleido page',
                'meta_keyword' => 'kleido, website'
            ];

            return view('components/header', $data)
                . view('pages/kleido', $data)
                . view('components/footer', $data);
        }
        public function routeToIndia(): string
        {
            $data = [
                'meta_title'   => 'Route to India Page',
                'meta_desc'    => 'Welcome to the Route to India page',
                'meta_keyword' => 'route, india, website'
            ];

            return view('components/header', $data)
                . view('pages/route-to-india', $data)
                . view('components/footer', $data);
        }
        public function travxevent(): string
        {
            $data = [
                'meta_title'   => 'TravXevent Page',
                'meta_desc'    => 'Welcome to the TravXevent page',
                'meta_keyword' => 'travxevent, website'
            ];

            return view('components/header', $data)
                . view('pages/travxevent', $data)
                . view('components/footer', $data);
        }
        public function UnderConstruction(): string
        {
            $data = [
                'meta_title'   => 'Under Construction Page',
                'meta_desc'    => 'Welcome to the Under Construction page',
                'meta_keyword' => 'under construction, website'
            ];

            return view('components/header', $data)
                . view('pages/under-construction', $data)
                . view('components/footer', $data);
        }
    }
