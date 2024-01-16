<?php

namespace app\Models;

class PhoneProductModel extends ProductModel
{
    const TABLE_NAME = 'phones2';

    protected string $producer;

    public function getProducer(): string
    {
        return $this->producer;
    }

}
