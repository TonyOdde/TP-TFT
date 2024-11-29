<?php

namespace Controllers\Routeur;

use Controllers;
use Controllers\Routeur\Route\RouteIndex;
use Controllers\Routeur\Route\RouteSearch;
use Controllers\Routeur\Route\RouteAddUnit;
use Controllers\Routeur\Route\RouteAddOrigin;
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
        $this->ctrlList['edit-unit'] = new Controllers\EditUnitController();
        $this->ctrlList['del-unit'] = new Controllers\DeleteUnitController();
    }


    private function createRouteList() {
        $id = $_GET['id'] ?? null;
        $this->routeList['index'] = new RouteIndex([], $this->ctrlList['main']);
        $this->routeList['del-unit'] = new RouteIndex([], $this->ctrlList['del-unit']);
        $this->routeList['search'] = new RouteSearch([], $this->ctrlList['main']);
        $this->routeList['add-unit'] = new RouteAddUnit([], $this->ctrlList['add-unit']);
        $this->routeList['edit-unit'] = new RouteAddUnit([$id], $this->ctrlList['edit-unit']);
        $this->routeList['add-unit-origin'] = new RouteAddOrigin([], $this->ctrlList['add-origin']);
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
