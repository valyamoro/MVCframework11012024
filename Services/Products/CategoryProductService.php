<?php
declare(strict_types=1);

namespace app\Services\Products;

use app\Models\ProductModel;
use app\Services\BaseService;

class CategoryProductService extends BaseService
{
    public function getItems(): array
    {
        $result = $this->repository->getProductsCategory();

        if (empty($result)) {
            $_SESSION['warning'] = 'В базе данных нету категорий!' . "\n";
        } else {
            foreach ($result as $key => $value) {
                $result[$key]['url'] = '/products/category' . '/' . $value['title'];
            }
        }


        return $result;
    }

}
