<?php
include __DIR__ . "/init.php";

$duozhuayu = new \Applib\Duozhuayu();
$result = $duozhuayu->searchBook(['isbn' => '9787302273561']);
print_r($result);die();
