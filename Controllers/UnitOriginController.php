<?php

namespace Controllers;

use Service\ServiceOrigin;

class UnitOriginController
{
    private $templates;
    private $service;
    private $message = '';

    public function __construct(){
        $this->templates = new \League\Plates\Engine(__DIR__.'\..\Views');
        $this->service = new ServiceOrigin();
    }
    public function index($params){
        echo $this->templates->render('add-origin', [
            'tftSetName' => 'Remix Rumble',
            'message' => $this->message,
        ]);
    }

    public function addOrigin($name){
        $this->message = $this->service->create($name);
    }
}