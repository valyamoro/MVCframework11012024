<?php

namespace app\Services\Products;

use app\Models\PhoneProductModel;
use app\Services\BaseService;

class PhoneProductService extends BaseService
{
    public function getProducts(): array
    {
        $result = $this->repository->getPhones();

        if (empty($result)) {
            $result[0] = 'В базе данных нету телефонов!' . "\n";
        } else {
            foreach ($result as $key => $value) {
                $result[$key]['url'] = '/products' . '/' . $value['id'];
            }
        }

        return $result;
    }
}