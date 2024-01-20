<?php
declare(strict_types=1);

namespace app\Services\Users;

use app\Models\UserModel;
use app\Services\BaseService;

class ReadUserBaseService extends BaseService
{
    public function getById(int $id): ?UserModel
    {
        $result = $this->repository->getById($id);

        if (!\is_null($result)) {
            $user = new UserModel();
            $user->loadData($result);
        } else {
            $_SESSION['error'] = 'Несуществующий пользователь';
        }

        return $result ? $user : null;
    }

}
