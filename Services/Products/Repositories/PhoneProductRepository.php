<?php

namespace app\Services\Products\Repositories;

use app\Models\PhoneProductModel;
use app\Services\BaseRepository;

class PhoneProductRepository extends BaseRepository
{
    public function getAll(): array
    {
        $phoneProduct = new PhoneProductModel($this->connection);

        return $phoneProduct->getAll();
    }
}