<?php

namespace app\Models;

use app\core\Model;

class ProductModel extends Model
{
    protected const TABLE_NAME = 'productsCategory';

    protected array $products;

    protected int $id;
    protected string $title;
    protected string $price;
    protected string $quantity;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $data): void
    {
        $this->products = $data;
    }

}
