<?php 

// namespace App\Controllers;

// use App\Controllers\BaseController;

// class Controller extends BaseController
class Controller 
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
}
