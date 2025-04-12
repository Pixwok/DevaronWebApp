<?php

namespace App\Controllers;

use App\Models\MCStatus;


class PublicPages extends BaseController
{
    protected $uri;

    public function __construct()
    {
        $this->uri = service('uri');
    }

    public function index(): string
    {
        $mcstatus = new MCStatus();

        /*$APIResult = $mcstatus->requestAPI('mc.devaron.fr:25574');
        $data = [
            'status' => $APIResult->online ? "<span id='online' class='badge text-bg-success align-self-start'>Online</span>": "<span id='offline' class='badge text-bg-dange align-self-start'>Offline</span>",
            'version' => $APIResult->version,
            'maxPlayers' => $APIResult->players->max,
            'onlinePlayers' => $APIResult->players->online,
            'currentPage' => $this->uri->getSegment(1),
        ];*/

        $data = [
            'status' => "<span id='online' class='badge text-bg-success align-self-start'>Online</span>",
            'version' => "1.21.4",
            'maxPlayers' => "20",
            'onlinePlayers' => "0",
        ];

        $currentPage = [
            'page' => $this->uri->getSegment(1)
        ];

        return view('templates/header', $currentPage) 
            .view('home', $data)
            .view('templates/footer');
    }

    public function join(): string
    {
        $currentPage = [
            'page' => $this->uri->getSegment(1)
        ];
        return view('templates/header', $currentPage) 
            .view('join')
            .view('templates/footer');
    }
    public function dynmap(): string
    {
        $currentPage = [
            'page' => $this->uri->getSegment(1)
        ];
        return view('templates/header', $currentPage)
            .view('dynmap');
    }
}
