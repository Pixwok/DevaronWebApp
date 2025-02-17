<?php

namespace App\Controllers;

class PublicPages extends BaseController
{
    public function index(): string
    {
        return view('templates/header') 
            .view('home')
            .view('templates/footer');
    }

    public function dynmap(): string
    {
        return view('templates/header')
            .view('dynmap');
    }
}
