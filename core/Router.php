<?php

namespace app\core;

class Router
{
    private function getUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    private function dispatch()
    {
        $parts = \parse_url($this->getUri());
        $segments = $parts['path'] === '/'
            ? 'Home'
            : \explode('/', \trim($parts['path'], '/'));

        $namespace = 'app\Controllers\\';

        if ($segments === 'Home') {
            $class = $namespace . $segments . 'Controller';
            $method = 'index';
        }

        $class = new $class();
        $class->{$method}();
    }

    public function resolve()
    {
        $this->dispatch();
    }
}