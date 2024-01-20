<?php
declare(strict_types=1);

namespace app\Services\Products;

use app\Services\BaseService;

class EditProductService extends BaseService
{
    public function edit(int $id, array $data, string $tableName): string
    {
        $result = $this->repository->edit($id, $data, $tableName);

        if (!$result) {
            return 'Такого товара не существует!' . "\n";
        }

        return 'Изменения сохранены успешно!' . "\n";
    }

}
