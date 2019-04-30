<?php

require_once '../bootloader.php';

if ($_SERVER['REQUEST_URI'] == '/about.php') {
    $class = '\App\Controller\About';
} else {
    $class = '\App\Controller\Home';
}
$instance = new $class();
print $instance->onRender();
