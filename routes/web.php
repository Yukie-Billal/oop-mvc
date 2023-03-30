<?php 

// use Routes\Route;
// use App\Controllers\Controller;
$route = new Route();
$route->get('/', [Controller::class, 'index']);
$route->get('/about', [Controller::class, 'about']);
$route->get('/produk', [ProdukController::class, 'index']);
$route->post('/tambah', [Controller::class, 'store']);
$route->post('/ubah', [Controller::class, 'update']);