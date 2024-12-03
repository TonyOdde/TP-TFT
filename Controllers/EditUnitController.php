<?php

namespace Controllers;

use Service\IService;
use Service\ServiceOrigin;
use Service\ServiceUnit;

class EditUnitController
{
    private $templates;

    private IService $service;

    public function __construct(){
        $this->templates = new \League\Plates\Engine(__DIR__.'\..\Views');
        $this->service = new ServiceUnit();
    }
    public function index($params){
        $serviceOrigin = new ServiceOrigin();
        $origins = $serviceOrigin->getAll();
        $serviceUnit = new ServiceUnit();
        $unit = $serviceUnit->getOne($_GET['id']);
        echo $this->templates->render('edit-unit', [
            'tftSetName' => 'Remix Rumble',
            'id' => $unit->getId(),
            'unit' => $unit->getName(),
            'unitOrigin' => $unit->getOrigin(),
            'origins' => $origins,
            'cout' => $unit->getCost(),
            'url' => $unit->getUrlImg()
        ]);
    }

    public function editUnit($unit){
        $unit['id'] = $_GET['id'];
        $this->service->update($unit);
    }
}