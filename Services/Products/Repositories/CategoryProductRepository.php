<?php
declare(strict_types=1);

namespace app\Services\Products\Repositories;

use app\Models\ProductModel;
use app\Services\BaseRepository;

class CategoryProductRepository extends BaseRepository
{
    public function getProductsCategory(): array
    {
        $query = 'select * from productsCategory';

        $this->connection->prepare($query);
        $this->connection->execute();

        return $this->connection->fetchAll();
    }

}
