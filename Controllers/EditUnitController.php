<?php

namespace Controllers;

use Service\ServiceOrigin;
use Service\ServiceUnit;

class EditUnitController
{
    private $templates;

    public function __construct(){
        $this->templates = new \League\Plates\Engine(__DIR__.'\..\Views');
    }
    public function index($params){
        $serviceOrigin = new ServiceOrigin();
        $origins = $serviceOrigin->getAll();
        $serviceUnit = new ServiceUnit();
        $unit = $serviceUnit->getOne($params['id']);
        echo $this->templates->render('add-unit', [
            'tftSetName' => 'Remix Rumble',
            'unit' => $unit->getName(),
            'unitOrigin' => $unit->getOrigin(),
            'origins' => $origins
        ]);
    }
}