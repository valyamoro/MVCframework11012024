<?php
declare(strict_types=1);

namespace app\Services\Products\Repositories;

use app\Services\BaseRepository;

class AllProductRepository extends BaseRepository
{
    public function getItems(): array
    {
        $query = 'select title from productsCategory';

        $this->connection->prepare($query)->execute();

        $result = [];

        foreach ($this->connection->fetchAll() as $value) {
            $query =  'select * from ' . $value['title'];

            $this->connection->prepare($query)->execute();

            $result[] = ($this->connection->fetchAll());
        }

        return \call_user_func_array('array_merge_recursive', $result);
    }
}