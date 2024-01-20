<?php
declare(strict_types=1);

namespace app\Services\Users\Repositories;

use app\Services\BaseRepository;

class AddUserRepository extends BaseRepository
{
    public function add($data): bool
    {
        $query = 'insert into users (email, firstName, lastName, password) values (?, ?, ?, ?)';

        $this->connection->prepare($query);
        $this->connection->execute(array_values($data));

        return (bool)$this->connection->rowCount();
    }

}
