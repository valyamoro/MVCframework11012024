<?php

namespace app\Services\Users\Repositories;

use app\Services\BaseRepository;

class AuthUserRepository extends BaseRepository
{
    public function auth(string $email): array
    {
        $query = 'select * from users where email=?';

        $this->connection->prepare($query)->execute([$email]);

        return $this->connection->fetch();
    }

}
