<?php

namespace app\Controllers;

use app\core\Controller;
use app\Models\ProductModel;

class ProductController extends Controller
{
    public function index(string $view, array $params = []): string
    {
        $data['products'] = $this->service->getAll();

        return $this->view->render($view, $data);
    }

    public function show(string $view, string $id, string $tableName)
    {
        $data['product'] = $this->service->getItem($id, $tableName);

        return $this->view->render($view, $data);
    }

}