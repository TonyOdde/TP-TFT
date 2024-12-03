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
        $efface = $service->getOne($_GET['id']);
        $nom = $efface->getName();
        $service->delete($efface->getId());
        $listAll = $service->getAll();
        echo $this->templates->render('home', [
            'tftSetName' => 'Remix Rumble',
            'message' =>  $nom . ' bien effacé',
            'listAll' => $listAll
        ]);
    }

}