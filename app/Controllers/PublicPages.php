<?php

namespace App\Controllers;

use App\Models\MCStatus;

class PublicPages extends BaseController
{
    public function index(): string
    {
        $mcstatus = new MCStatus();

        $APIResult = $mcstatus->requestAPI('mc.devaron.fr');

        $data = [
            'status' => $APIResult->online ? 'Online': 'Offline',
            'version' => $APIResult->version,
            'maxPlayers' => $APIResult->players->max,
            'onlinePlayers' => $APIResult->players->online,
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
