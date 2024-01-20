<?php

namespace app\Services\Users\Repositories;

// Запрос на чтение
use app\Services\BaseRepository;

// Команды изменяют сущности, а запросы просто получают их.
class ReadUserRepository extends BaseRepository
{
    public function getById(int $id): ?array
    {
        $query = 'select * from users where id=?';

        $sth = $this->connection->prepare($query)->execute([$id]);

        return $sth->fetch() ?? null;
    }

}
