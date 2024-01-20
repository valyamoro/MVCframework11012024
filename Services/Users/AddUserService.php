<?php
declare(strict_types=1);

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
                $result = $this->repository->add($data);
                
                if ($result) {
                    $_SESSION['success'] = 'Вы успешно зарегистрировались!';
                    header('Location: /');
                } else {
                    $_SESSION['warning'] = 'Ошибка регистрации, пожалуйста повторите попытку' . "\n";
                }
            } else {
                $_SESSION['warning'] = 'Пароли не совпадают!' . "\n";
            }
        }
    }

}
