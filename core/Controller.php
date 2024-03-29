<?php

namespace app\core;

use app\core\Http\Request;
use app\Database\PDODriver;
use app\Services\BaseService;

abstract class Controller
{
    protected View $view;

    public function __construct(
        protected PDODriver $PDODriver,
        protected Request $request,
        protected BaseService $service,
    ) {
        $this->view = new View();
    }

    public function index(string $view, array $params = []): string
    {
        return $this->view->render($view, $params);
    }

}
