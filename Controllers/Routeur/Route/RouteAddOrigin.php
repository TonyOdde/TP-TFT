<?php

namespace Controllers\Routeur\Route;

use Controllers\Routeur\Route;

class RouteAddOrigin extends Route
{

    private $controller;

    public function __construct($params = [],$controller, $method = 'GET')
    {
        parent::__construct($params, $method);
        $this->controller = $controller;
    }

    public function get($params = [])
    {
        return $this->controller->index($params);
    }

    public function post($params = [])
    {
        $this->controller->addOrigin($params);
        return $this->controller->index($params);
    }
}