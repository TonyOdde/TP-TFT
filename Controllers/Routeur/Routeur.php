<?php

namespace Controllers\Routeur;

use Controllers;
use Controllers\Routeur\Route\RouteIndex;
use Exception;

class Routeur {
    private $routeList;
    private $ctrlList;
    private $action_key;

    public function __construct($name_of_action_key = "action") {
        $this->ctrlList = [];
        $this->routeList = [];
        $this->action_key = $name_of_action_key;
        $this->createControllerList();
        $this->createRouteList();
    }


    private function createControllerList() {
        $this->ctrlList['main'] = new Controllers\MainController();
        $this->ctrlList['add-unit'] = new Controllers\UnitController();
        $this->ctrlList['add-origin'] = new Controllers\UnitOriginController();
    }


    private function createRouteList() {
        $this->routeList['index'] = new RouteIndex([], $this->ctrlList['main']);
        $this->routeList['search'] = new RouteIndex(['search'], $this->ctrlList['main']);
        $this->routeList['add-unit'] = new RouteIndex([], $this->ctrlList['add-unit']);
        $this->routeList['add-unit-origin'] = new RouteIndex([], $this->ctrlList['add-origin']);
    }


        public function routing($get, $post) {

            $action = $get[$this->action_key] ?? 'index';

            if (isset($this->routeList[$action])) {
                $route = $this->routeList[$action];


                if (!empty($post)) {

                    $route->action($post, 'POST');
                } else {
                    $route->action($get, 'GET');
                }
            } else {
                throw new Exception("Action non trouvée : $action");
            }
        }
}
