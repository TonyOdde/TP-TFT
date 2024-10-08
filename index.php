<?php

use Helpers\Psr4AutoloaderClass;

require_once "Helpers/Psr4AutoloaderClass.php";

$loader = new Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('\Helpers','/Helpers');

echo "test";