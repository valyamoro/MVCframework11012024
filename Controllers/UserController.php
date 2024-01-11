<?php

namespace app\Controllers;

use app\core\Controller;

class UserController extends Controller
{
    public function add()
    {
        echo 'hello';
    }

    public function edit(int $id)
    {
        var_dump($id);
    }
}