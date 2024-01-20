<?php

namespace app\Services\Users;

use app\Services\BaseService;
use app\Services\Users\Repositories\AddUserRepository;


class AddUserService extends BaseService
{
    public function add(array $data)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($data['password'] === $data['passwordConfirm']) {
                $data = [
                    'email' => $data['email'],
                    'firstName' => $data['firstName'],
                    'lastName' => $data['lastName'],
                    'password' => $data['password'],
                ];
                $this->repository->insert($data);
            }
        }

    }

}
