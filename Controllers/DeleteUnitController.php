<?php

namespace Controllers;

use Models\UnitDAO;
class DeleteUnitController
{

    private $templates;

    public function __construct(){
        $this->templates = new \League\Plates\Engine(__DIR__.'\..\Views');
    }
    public function index()
    {
        $dao = new UnitDAO();
        $listAll = $dao->getAll();
        $efface = $dao->getById($_GET['id']);
        echo $this->templates->render('home', [
            'tftSetName' => 'Remix Rumble',
            'message' => $efface->getName() . ' bien effacé',
            'listAll' => $listAll
        ]);
    }

}