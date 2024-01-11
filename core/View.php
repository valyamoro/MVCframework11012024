<?php

namespace app\core;

class View
{
    public function render(string $view, $params = []): void
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        echo \str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function renderOnlyView(string $view, $params): string
    {
        \extract($params);
        \ob_start();
        include_once __DIR__ . "/../Views/{$view}.php";
        return \ob_get_clean();
    }

    protected function layoutContent(): string
    {
        \ob_start();
        include_once __DIR__ . '/../Views/layouts/main.php';
        return \ob_get_clean();
    }

}
