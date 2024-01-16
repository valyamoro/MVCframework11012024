<?php

namespace app\Services\Products;

use app\Services\BaseService;

class ShowProductService extends BaseService
{
    public function getItem(int $id, string $tableName = ''): array
    {
        $result = $this->repository->getItem($id, $tableName);

        if (\is_null($result)) {
            $result['warning'] = 'Такого товара не существует!' . "\n";
        }

        return $result;
    }
}