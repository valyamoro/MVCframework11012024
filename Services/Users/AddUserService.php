<?php

namespace app\Services\Users;

use app\Services\BaseService;
use app\Services\Users\Repositories\AddUserRepository;



class AddUserService extends BaseService
{
    public function add(array $data)
    {
        $this->repository->insert($data);
    }

}
