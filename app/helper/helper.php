<?php 

function view($view,$data = [])
{
    include 'resources/views/' . $view . '.php';
}

function abort($status)
{
    if(file_exists(VIEW_PATH .'errors/'.$status.'.php')){
        include 'resources/views/' .'errors/'.$status.'.php';
    } else {
        include 'resources/views/' .'errors/'.$status.'.php';
    }
}