<?php

namespace Controllers;

class UnitController
{
    private $templates;

    public function __construct(){
        $this->templates = new \League\Plates\Engine(__DIR__.'\..\Views');
    }
    public function index($params){
        echo $this->templates->render('add-unit', [
            'tftSetName' => 'Remix Rumble'
        ]);
    }
}