<?php
if (!session_id()) {session_start();}



require 'config/app.php';
require 'app/helper/helper.php';
require 'app/kernel.php';
require 'routes/kernel.php';

foreach ($route->collection[$_SERVER['REQUEST_METHOD']] as $key => $value) {
    if (isset($value[$_SERVER['REQUEST_URI']])) {
        $request = $value[$_SERVER['REQUEST_URI']];
        $controller = $value[$_SERVER['REQUEST_URI']][0];
        $method = $value[$_SERVER['REQUEST_URI']][1];
        $app = new $controller;
        $app->$method();
    }
}

