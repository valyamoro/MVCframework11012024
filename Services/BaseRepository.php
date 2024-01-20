<?php

namespace app\Services;
use app\Database\PDODriver;

abstract class BaseRepository
{
    protected const TABLE_NAME = '';

    public function __construct(
        protected PDODriver $connection,
    ) {
    }

    public function insert(array $data): int
    {
        $placeHolders = \str_repeat('?, ', \count($data) - 1) . '?';

        $query = 'insert into ' . static::TABLE_NAME . '(' . \implode(', ',
                \array_keys($data)) . ') values (' . $placeHolders . ')';

        $this->connection->prepare($query)->execute(\array_values($data));

        return $this->connection->lastInsertId();
    }

    public function update(array $data, int $id): bool
    {
        $params = \implode(', ', \array_map(function ($key) {
            return "{$key} = :{$key}";
        }, \array_keys($data)));
        $data['id'] = $id;

        $query = 'UPDATE ' . static::TABLE_NAME . ' set ' . $params . ' where id=:id limit 1';

        $this->connection->prepare($query);

        return $this->connection->rowCount();
    }

    public function delete(int $id): bool
    {
        $query = 'delete from ' . static::TABLE_NAME . ' where id=? limit 1';

        $this->connection->prepare($query)->execute([$id]);

        return $this->connection->rowCount();
    }

    public function getAll(): array
    {
        $query = 'select * from ' . static::TABLE_NAME;

        return $this->connection->prepare($query)->execute()->fetchAll();
    }

    public function getById(int $id): ?array
    {
        $query = 'select * from ' . static::TABLE_NAME . ' where id=? limit 1';

        return $this->connection->prepare($query)->execute([$id])->fetch();
    }

}
