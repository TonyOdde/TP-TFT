<?php

namespace Controllers;

use League\Plates\Engine;
use Service\IService;
use Service\ServiceOrigin;
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
        $serviceOrigin = new ServiceOrigin();
        $origins = $serviceOrigin->getAll();
        if (!empty($_GET['id'])){
            $unit = $this->service->getOne($_GET['id']);
            echo $this->templates->render('add-unit', [
                'tftSetName' => 'Remix Rumble',
                'unit' => $unit->getName(),
                'origins' => $origins
            ]);
        }
        else{
            echo $this->templates->render('add-unit', [
                'tftSetName' => 'Remix Rumble',
                'unit' => null,
                'origins' => $origins
            ]);
        }
    }

    public function addUnit($name){
        $this->service->create($name);
    }
}