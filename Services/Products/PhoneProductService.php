<?php

namespace app\Services\Products;

use app\Models\PhoneProductModel;
use app\Services\BaseService;

class PhoneProductService extends BaseService
{
    public function getAll(): array
    {
        $result = $this->repository->getAll();

        if (empty($result)) {
            $result[0] = 'В базе данных нету товаров!' . "\n";
        } else {
            foreach ($result as $key => $value) {
                $result[$key]['url'] = '/products' . '/' . $value['id'];
            }
        }

        return $result;
    }
}