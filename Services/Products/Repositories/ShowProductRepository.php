<?php
declare(strict_types=1);

namespace app\Services\Products\Repositories;

use app\Services\BaseRepository;

class ShowProductRepository extends BaseRepository
{
    public function getItem(string $category, int $id)
    {
        $query = 'select * from ' .  $category . ' where id=?';

        $this->connection->prepare($query)->execute([$id]);

        return $this->connection->fetch();
    }

}
