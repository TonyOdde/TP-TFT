<?php

require_once "Helpers/Psr4AutoloaderClass.php";

$loader = new \Helpers\Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('\Helpers',__DIR__.'/Helpers');
$loader->addNamespace('\League\Plates',__DIR__.'/Vendor/plates-3.5.0/src');
$loader->addNamespace('\Views',__DIR__.'/Views');
$loader->addNamespace('\Controllers', __DIR__.'/Controllers');
$loader->addNamespace('\Models', __DIR__.'/Models');
$loader->addNamespace('\Config', __DIR__.'/Config');
$loader->addNamespace('\Routeur', __DIR__.'/Controllers/Routeur');

$routeur = new Controllers\Routeur\Routeur();

if(isset($_GET['action'])){
    $routeur->routing($_GET, null);
}
else{
    $routeur->routing(null, null);
}
