<?php

namespace Controllers;

use Models\UnitDAO;
use Service\ServiceOrigin;
use Service\ServiceUnit;

class DeleteUnitController
{

    private $templates;

    public function __construct(){
        $this->templates = new \League\Plates\Engine(__DIR__.'\..\Views');
    }
    public function index()
    {
        $service = new ServiceUnit();
        $listAll = $service->getAll();
        $efface = $service->getOne($_GET['id']);
        echo $this->templates->render('home', [
            'tftSetName' => 'Remix Rumble',
            'message' => $efface->getName() . ' bien effacé',
            'listAll' => $listAll
        ]);
    }

}