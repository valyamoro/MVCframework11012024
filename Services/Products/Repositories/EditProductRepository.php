<?php
declare(strict_types=1);

namespace app\Services\Products\Repositories;

use app\Services\BaseRepository;

class EditProductRepository extends BaseRepository
{
    public function edit(int $id, array $data, string $tableName): bool
    {
        $product = new ('app\Models\\' .  $tableName . 'ProductModel')($this->connection);

        return $product->update($data, $id);
    }

}
