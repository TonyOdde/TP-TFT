<?php

namespace Controllers;

use Models\UnitDAO;

class MainController
{

    private $templates;

    public function __construct($engine){
        $this->templates = $engine;
    }
    public function index() : void {
        $dao = new UnitDAO();
        $listAll = $dao->getAll();
        $idMalo = $dao->getById("1");
        $idInconnu = $dao->getById("2");
        echo $this->templates->render('home', [
            'tftSetName' => 'Remix Rumble',
            'listAll' => $listAll,
            'idMalo' => $idMalo,
            'idInconnu' => $idInconnu
        ]);
    }
}