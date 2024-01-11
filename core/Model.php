<?php

namespace app\core;

use DatabaseConfiguration;
use DatabasePDOConnection;
use PDODriver;

class Model
{
    protected const TABLE_NAME = '';

    public function connectionDB(): \PDODriver
    {
        $configuration = include_once __DIR__ . '/../config/db.php';
        $dataBaseConfiguration = new DatabaseConfiguration(...$configuration);
        $dataBasePDOConnection = new DatabasePDOConnection($dataBaseConfiguration);

        return new PDODriver($dataBasePDOConnection->connection());
    }
    
}