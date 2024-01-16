<?php

namespace app\Services\Products;

use app\Services\BaseService;

class ShowProductService extends BaseService
{
    public function getItem(int $id, string $tableName = ''): array
    {
        $result = $this->repository->getItem($id, $tableName);

        if (empty($result)) {
            $result[0] = 'Такого товара не существует!' . "\n";
        }

        return $result;
    }
}