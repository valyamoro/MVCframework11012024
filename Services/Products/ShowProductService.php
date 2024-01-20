<?php
declare(strict_types=1);

namespace app\Services\Products;

use app\Services\BaseService;

class ShowProductService extends BaseService
{
    public function getItem(string $category, int $id): array
    {
        if (!preg_match('/^[a-zA-Z0-9_]+$/', $category)) {
            $_SESSION['warning'] = 'Что-то пошло не так!' . "\n";
            header('Location: /');
        }

        $result = $this->repository->getItem($category, $id);

        if (empty($result)) {
            $_SESSION['warning'] = 'Такого товара не существует!' . "\n";
            return [];
        }

        return $result;
    }
}