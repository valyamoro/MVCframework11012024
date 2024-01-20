<?php

namespace app\Controllers;

use app\core\Controller;
use app\Models\UserModel;

class UserController extends Controller
{
    public function index(string $view, array $params = []): string
    {
        $data = $this->request->getPost();

        $this->service->{$view}($data);

        return $this->view->render($view, $params);
    }

}
