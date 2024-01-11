<?php

namespace app\core;

class Router
{
    private function getUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    private function dispatch(): void
    {
        $parts = \parse_url($this->getUri());
        $segments = $parts['path'] === '/'
            ? 'Home'
            : \explode('/', \trim($parts['path'], '/'));

        $namespace = 'app\Controllers\\';
        $method = 'index';

        if ($segments === 'Home') {
            $class = $namespace . $segments;
        } else {
            $class = $namespace . \rtrim($segments[0], 's');

            if (\count($segments) === 2) {
                $method = $segments[1];
            } else if(\count($segments) === 3) {
                $method = $segments[1];
                $params = $segments[2];
            }
        }

        $class = new ($class . 'Controller')();

        !empty($params) ? $class->{$method}($params) : $class->{'index'}();
    }

    public function resolve(): void
    {
        $this->dispatch();
    }

}
