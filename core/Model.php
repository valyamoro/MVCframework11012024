<?php

namespace app\core;

use DatabaseConfiguration;
use DatabasePDOConnection;
use PDODriver;

class Model
{
    protected const TABLE_NAME = '';

    public static function connectionDB(): PDODriver
    {
        $configuration = include_once __DIR__ . '/../config/db.php';
        $dataBaseConfiguration = new DatabaseConfiguration(...$configuration);
        $dataBasePDOConnection = new DatabasePDOConnection($dataBaseConfiguration);

        return new PDODriver($dataBasePDOConnection->connection());
    }

    public function loadData(array $data): void
    {
        foreach ($data as $key => $value) {
            if (\property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    public function insert(array $data): int
    {
        $placeHolders = \str_repeat('?, ', \count($data) - 1) . '?';

        $query = 'insert into ' . static::TABLE_NAME . '(' . \implode(', ',
                \array_keys($data)) . ') values (' . $placeHolders . ')';

        self::connectionDB()->prepare($query)->execute(\array_values($data));

        return self::connectionDB()->lastInsertId();
    }

    public function update(array $data, int $id): bool
    {
        $params = \implode(', ', \array_map(function ($key) {
            return "{$key} = :{$key}";
        }, \array_keys($data)));
        $data['id'] = $id;

        $query = 'UPDATE ' . static::TABLE_NAME . ' set ' . $params . ' where id=:id limit 1';

        self::connectionDB()->prepare($query);

        return self::connectionDB()->rowCount();
    }

    public function delete(int $id): bool
    {
        $query = 'delete from ' . static::TABLE_NAME . ' where id=? limit 1';

        self::connectionDB()->prepare($query)->execute([$id]);

        return self::connectionDB()->rowCount();
    }

    public function getAll(): array
    {
        $query = 'select * from ' . static::TABLE_NAME;

        return self::connectionDB()->prepare($query)->execute()->fetchAll();
    }

}
