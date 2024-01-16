<?php

namespace app\Database;

class PDOConnection
{
    public function connection(): \PDO
    {
        $config = require __DIR__ . '/../config/db.php';
        return new \PDO(
            $this->configuration(),
            $config['username'],
            $config['password'],
        );
    }

    private function configuration(): string
    {
        return sprintf('%s:host=%s;dbname=%s;charset=%s',
            $config['port'],
            $config['host'],
            $config['port'],
            $config['charset'],
        );
    }
}