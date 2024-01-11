<?php

namespace app\core;

class Controller
{
    public function index(string $view, array $params = []): void
    {
        View::render($view, $params);
    }

}