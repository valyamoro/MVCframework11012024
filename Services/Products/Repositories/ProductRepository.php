<?php

namespace app\Services\Products\Repositories;

use app\Models\ProductModel;
use app\Services\BaseRepository;

class ProductRepository extends BaseRepository
{
    public function getAll(): array
    {
        $product = new ProductModel($this->connection);

        return $product->getAll();
    }

}
