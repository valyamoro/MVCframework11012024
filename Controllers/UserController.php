<?php

namespace app\Controllers;

use app\core\Controller;
use app\Models\User;

class UserController extends Controller
{
    public function add()
    {
        return 'add';
    }

    public function edit(int $id)
    {
        var_dump($id);
    }

}