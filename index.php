<?php

use Helpers\Psr4AutoloaderClass;

require_once "Helpers/Psr4AutoloaderClass.php";

$loader = new \Helpers\Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('\Helpers',__DIR__.'/Helpers');
$loader->addNamespace('\League\Plates',__DIR__.'/Vendor/plates-3.5.0/src');
$loader->addNamespace('\Views',__DIR__.'/Views');
$loader->addNamespace('Controllers', __DIR__.'/Controllers');

$engine = new \League\Plates\Engine(__DIR__.'/Views');

$controller = new \Controllers\MainController($engine);
$controller->index();

