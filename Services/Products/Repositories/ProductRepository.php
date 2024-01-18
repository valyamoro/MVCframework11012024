<?php

namespace app\Services\Products\Repositories;

use app\Models\ProductModel;
use app\Services\BaseRepository;

class ProductRepository extends BaseRepository
{
    protected const TABLE_NAME = 'productsCategory';

    public function getProducts(): array
    {
        return $this->getAll();
    }

}
