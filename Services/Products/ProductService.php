<?php

namespace app\Services\Products;

use app\Models\ProductModel;
use app\Services\BaseService;

class ProductService extends BaseService
{
    public function getAll(): array
    {
        $result = $this->repository->getAll();

        if (empty($result)) {
            $result[0] = 'В базе данных нету товаров!' . "\n";
        }

        return $result;
    }

}
