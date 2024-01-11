<?php

namespace app\core;

class View
{
    public static function render(string $view, array $params)
    {
        \extract($params);
        \ob_start();
        include __DIR__ . "/../Views/{$view}.php";
    }
}