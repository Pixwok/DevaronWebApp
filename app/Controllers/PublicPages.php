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
            'status' => $APIResult->online ? "<span id='online' class='badge text-bg-success align-self-start'>Online</span>": "<span id='offline' class='badge text-bg-dange align-self-start'>Offline</span>",
            'version' => $APIResult->version,
            'maxPlayers' => $APIResult->players->max,
            'onlinePlayers' => $APIResult->players->online,
        ];

        return view('templates/header') 
            .view('home', $data)
            .view('templates/footer');
    }

    public function join(): string
    {
        return view('templates/header') 
            .view('join')
            .view('templates/footer');
    }
    public function dynmap(): string
    {
        return view('templates/header')
            .view('dynmap');
    }
}
