<?php
include __DIR__ . "/vendor/autoload.php";
include __DIR__ . "/app/class/Loader.php";

Applib\Loader::addNameSpace('Applib', __DIR__ . '/app/class');
spl_autoload_register('\\Applib\\Loader::autoload');
