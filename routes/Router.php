<?php 

// namespace Routes;

class Route
{
    public $collection = [];
    public function get($url, $callback)
    {
        self::collect('GET',$url,$callback[0],$callback[1]);
    }
    public function post($url, $callback)
    {
        self::collect('POST',$url,$callback[0],$callback[1]);
    }
    public function collect($method, $uri, $controller, $conMethod)
    {
        $this->collection[$method][] = [$uri => [$controller,$conMethod]];
    }
}