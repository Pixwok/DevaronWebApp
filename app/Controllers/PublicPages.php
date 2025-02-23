<?php

namespace App\Controllers;

use App\Models\MCStatus;

class PublicPages extends BaseController
{
    public function index(): string
    {
        $mcstatus = new MCStatus();

        $data = [
            '$mcstatus' => $mcstatus->requestAPI('mc.devaron.fr')
        ];

        return view('templates/header') 
            .view('home', $data)
            .view('templates/footer');
    }

    public function dynmap(): string
    {
        return view('templates/header')
            .view('dynmap');
    }
}
