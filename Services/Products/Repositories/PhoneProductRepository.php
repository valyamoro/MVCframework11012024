<?php

namespace app\Services\Products\Repositories;

use app\Models\PhoneProductModel;
use app\Services\BaseRepository;

class PhoneProductRepository extends BaseRepository
{
    public const TABLE_NAME = 'phones2';

    public function getPhones(): array
    {
        return $this->getAll();
    }

}
