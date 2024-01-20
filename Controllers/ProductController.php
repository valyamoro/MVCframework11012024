<?php

namespace app\Controllers;

use app\core\Controller;
use app\Models\ProductModel;

class ProductController extends Controller
{
    public function index(string $view, array $params = []): string
    {
        $data['products'] = $this->service->getItems();

        return $this->view->render($view, $data);
    }

    public function show(string $view, string $category, string $id)
    {
        $data['product'] = $this->service->getItem($category, $id);

        return $this->view->render($view, $data);
    }

    public function edit(string $view, string $id, string $tableName)
    {
        $data['message'] = $this->service->edit($id, $this->request->getPost(), $tableName);

        return $this->view->render($view, $data);
    }

}
