<?php
if (!session_id()) {session_start();}

require 'config/app.php';
require 'src/src.php';
require 'app/kernel.php';
require 'routes/kernel.php';

$available = 0;
foreach ($route->collection[$_SERVER['REQUEST_METHOD']] as $key => $value) {
    if (isset($value[$_SERVER['REQUEST_URI']])) {
        $available = 1;
        $request = $value[$_SERVER['REQUEST_URI']];
        $controller = $value[$_SERVER['REQUEST_URI']][0];
        $method = $value[$_SERVER['REQUEST_URI']][1];
        $app = new $controller;
        return $app->$method();
    }
}
if ($available == 0) {
    return abort(404);
}