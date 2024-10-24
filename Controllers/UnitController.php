<?php

namespace Controllers;

use League\Plates\Engine;
use Service\IService;
use Service\ServiceUnit;

class UnitController
{
    private Engine $templates;
    private IService $service;

    public function __construct(){
        $this->templates = new \League\Plates\Engine(__DIR__.'\..\Views');
        $this->service = new ServiceUnit();
    }
    public function index($params){
        $unit = null;
        if (!empty($_GET['id'])){
            $unit = $this->service->getOne($_GET['id']);
        }

        echo $this->templates->render('add-unit', [
            'tftSetName' => 'Remix Rumble',
            'unit' => $unit->getName()
        ]);
    }
}