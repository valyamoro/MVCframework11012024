<?php

namespace app\Controllers;

class UserController
{
    public function index()
    {
        echo 'index';
    }

    public function edit(int $id)
    {
        var_dump($id);
    }
}