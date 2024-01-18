<?php

namespace app\Services\Products;

use app\Models\ProductModel;
use app\Services\BaseService;

class ProductService extends BaseService
{
    public function getProducts(): array
    {
        $result = $this->repository->getProducts();

        if (empty($result)) {
            $_SESSION['warning'] = 'В базе данных нету товаров!' . "\n";
        }

        return $result;
    }

}
