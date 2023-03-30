<?php 
function view($view,$data = [])
{
    $base_url = PUBLIC_PATH;
    include VIEW_PATH . $view . '.php';
}

function abort($status)
{
    if(file_exists(VIEW_PATH .'errors/'.$status.'.php')){
        include VIEW_PATH .'errors/'.$status.'.php';
    } else {
        header("location:notfound");
    }
}

function dd($item)
{
    return var_dump($item);
}