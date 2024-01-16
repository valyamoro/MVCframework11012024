<?php

namespace app\Services\Products\Repositories;

use app\Services\BaseRepository;

class ShowProductRepository extends BaseRepository
{
    public function getItem(int $id, string $tableName)
    {
        $class = 'app\\Models\\' . $tableName . 'ProductModel';
        $product = new $class($this->connection);

        return $product->getById($id);
    }

}
