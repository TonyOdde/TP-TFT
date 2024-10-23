<?php

namespace Controllers\Routeur;

abstract class Route {
    protected $params;
    protected $method;


    public function __construct($params = [], $method = 'GET') {
        $this->params = $params;
        $this->method = $method;
    }


    public function action($params = [], $method='GET') {
        if ($this->method === 'GET') {
            return $this->get($this->params);
        } elseif ($this->method === 'POST') {
            return $this->post($this->params);
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