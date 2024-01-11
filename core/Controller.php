<?php

namespace app\core;

class Controller
{
    public function index(string $view, array $params = []): void
    {
        $render = new View();
        $render->render($view, $params);
    }

}
