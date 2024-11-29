<?php

namespace Controllers\Routeur;

use Exception;

abstract class Route {
    protected $params;
    protected $method;


    public function __construct($params = [], $method = 'GET') {
        $this->params = $params;
        $this->method = $method;
    }


    public function action($params = [], $method='GET') {
        if ($method === 'GET') {
            return $this->get($params);
        } elseif ($method === 'POST') {
            return $this->post($params);
        }
    }


    protected function getParam(array $array, string $paramName, bool $canBeEmpty = true) {
        if (isset($array[$paramName])) {
            if (!$canBeEmpty && empty($array[$paramName])) {
                throw new Exception("Paramètre '$paramName' vide");
            }
            return $array[$paramName];
        } else {
            throw new Exception("Paramètre '$paramName' absent");
        }
    }


    public abstract function get($params = []);
    public abstract function post($params = []);
}