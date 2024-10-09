<?php

namespace Controllers;

class MainController
{

    private $templates;

    public function __construct($engine){
        $this->templates = $engine;
    }
    public function index() : void {
        echo $this->templates->render('home', ['tftSetName' => 'Remix Rumble']);
    }
}