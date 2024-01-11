<?php

namespace app\Controllers;

use app\core\Controller;
use app\Models\UserModel;

class UserController extends Controller
{
    public function add(array $data)
    {
        $user = new UserModel();

        if ($data['passwordConfirm'] === $data['password']) {
            $data = [
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'password' => $data['password'],
                'email' => $data['email'],
            ];
            $user->insert($data);
        }

        header('Location: /');
    }

    public function edit(int $id)
    {
        var_dump($id);
    }

}