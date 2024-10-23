<?php

namespace Controllers\Routeur\Route;

use Controllers\Routeur\Route;

class RouteSearch extends Route
{

    private $controller;

    public function __construct($params = [], $controller, $method = 'GET') {
        parent::__construct($params, $method);
        $this->controller = $controller;
    }
    function get($params = [])
    {
        return $this->controller->search($params);
    }

    function post($params = [])
    {
        return $this->controller->search($params);
    }
}