<?php 

// use Routes\Route;
// use App\Controllers\Controller;
$route = new Route();
$route->get('about', [Controller::class, 'index']);