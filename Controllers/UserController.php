<?php

namespace app\Controllers;

use app\core\Controller;
use app\Models\UserModel;

class UserController extends Controller
{
    public function add()
    {
        $data = $this->request->getPost();

        if ($data['password'] === $data['passwordConfirm']) {
            $data = [
                'email' => $data['email'],
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'password' => $data['password'],
            ];
        }

        $this->service->add($data);
    }

    public function read(int $id): string
    {
        $user = $this->service->getById($id);

        return $user->getId();
    }

}
