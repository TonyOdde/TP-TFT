<?php

namespace Controllers;

use Models\UnitDAO;

class MainController
{

    private $templates;

    public function __construct(){
        $this->templates = new \League\Plates\Engine(__DIR__.'\..\Views');
    }
    public function index()
    {
        $dao = new UnitDAO();
        $listAll = $dao->getAll();
        $idMalo = $dao->getById("1");
        echo $this->templates->render('home', [
            'tftSetName' => 'Remix Rumble',
            'listAll' => $listAll,
            'idMalo' => $idMalo
        ]);
    }

    public function search()
    {
        echo $this->templates->render('search', [
            'tftSetName' => 'Remix Rumble',
        ]);
    }
}