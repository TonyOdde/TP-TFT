<?php

namespace Controllers;

use League\Plates\Engine;
use Service\IService;
use Service\ServiceUnit;

class MainController
{

    private Engine $templates;
    private IService $service;

    public function __construct(){
        $this->templates = new \League\Plates\Engine(__DIR__.'\..\Views');
        $this->service = new ServiceUnit();
    }
    public function index() : void
    {
        $listAll = $this->service->getAll();
        echo $this->templates->render('home', [
            'tftSetName' => 'Remix Rumble',
            'listAll' => $listAll,
            'message' => ''
        ]);
    }

    public function search()
    {
        echo $this->templates->render('search', [
            'tftSetName' => 'Remix Rumble'
        ]);
    }
}