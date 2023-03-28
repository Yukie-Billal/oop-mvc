<?php
if (!session_id()) {session_start();}
// use App\Controllers\Controller;
// use Routes\Route;
require 'config/app.php';
require 'app/helper/helper.php';
require 'app/kernel.php';
require 'routes/kernel.php';


class App
{
    public $route = ROUTE_AVAILABLE;
    private $controller;
    private $method = false;

    public function start()
    {
        $this->get_uri();
        if ($this->controller == '' OR $this->controller == APP_CONTROLLER) {
            $this->controller = APP_CONTROLLER;
        } else {
            $this->controller .= 'Controller';
        }
        if (class_exists($this->controller)) {
            $start = new $this->controller;
            if (!$this->method) {
                if (method_exists($this->controller, 'index')) {
                    $start->index();
                } else {
                    return abort(404);
                }
            } else {
                if (method_exists($this->controller, $this->method)) {
                    $start->{$this->method}();
                } else {
                    return abort(404);
                }
            }
        } else {
            return abort(404);
        }
    }
    public function get_uri()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $index = -1;
        if ($uri == '' OR $uri == '/') {
            $get_url = '';
            $index = 1;
        } else {
            $get_url = explode("/",$uri);
            foreach ($get_url as $value) {
                $index += 1;
            }
        }
        // return;
        if ($index > 0 AND $get_url != '') {
            if ($index > 1) {
                $this->controller = $get_url[$index-1];
                $this->method = $get_url[$index];
                // var_dump(method_exists($this->controller,$this->method));
            } else {
                $this->controller = $get_url[$index];
                $this->method = '';
            }
        } else {
            $this->controller = '';
        }
    }
}

$app = new App();
$app->start();
// var_dump($route->collection);