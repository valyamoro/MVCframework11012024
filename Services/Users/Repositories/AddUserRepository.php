<?php

namespace app\Services\Users\Repositories;

use app\Services\BaseRepository;

class AddUserRepository extends BaseRepository
{
    public const TABLE_NAME = 'users';

    public function add($data)
    {
        return $this->insert($data);
    }

}
