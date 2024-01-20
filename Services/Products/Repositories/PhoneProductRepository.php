<?php
declare(strict_types=1);

namespace app\Services\Products\Repositories;

use app\Models\PhoneProductModel;
use app\Services\BaseRepository;

class PhoneProductRepository extends BaseRepository
{
    public function getPhones(): array
    {
        $query = 'select * from phones';

        $this->connection->prepare($query)->execute();

        return $this->connection->fetchAll();
    }

}
