<?php

namespace app\Services\Users;

use app\Services\BaseService;

class AuthUserService extends BaseService
{
    public function auth(array $data)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->repository->auth($data['email']);

            if ($user['password'] === $data['password']) {
                $_SESSION['user'] = [
                    'email' => $user['email'],
                    'firstName' => $user['firstName'],
                    'lastName' => $user['lastName'],
                    'password' => $user['password'],
                ];

                $_SESSION['success'] = 'Вы успешно авторизовались!' . "\n";
                header('Location: /');
            } else {
                $_SESSION['warning'] = 'Пароль введен неверно!' . "\n";
            }

        }
    }
}