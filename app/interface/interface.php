<?php 

interface ModelInterface
{
    protected $table;
}

interface Route
{
    public function get();
    public function post();
    public function delete();
    public function put();
}